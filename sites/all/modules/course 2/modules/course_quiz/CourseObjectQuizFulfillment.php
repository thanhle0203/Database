<?php

/**
 * Course fulfillment class for quizzes.
 */
class CourseObjectQuizFulfillment extends CourseObjectNodeFulfillment {

  /**
   * Define storage for quiz result IDs.
   */
  function optionsDefinition() {
    return array('quiz_result_ids' => array());
  }

  /**
   * Remove all quiz attempts associated with this fulfillment.
   */
  function delete() {
    parent::delete();
    $result_ids = (array) $this->getOption('quiz_result_ids');
    if (course_quiz_quiz_version() >= 5) {
      entity_delete_multiple('quiz_result', $result_ids);
    }
    else {
      quiz_delete_results($result_ids);
    }
  }

  /**
   * Marks a user's fulfillment record for this object complete if the user
   * passed the quiz.
   */
  function grade($rid) {
    $result = quiz_result_load($rid);

    // Store the result ID.
    $result_ids = (array) $this->getOption('quiz_result_ids');
    $result_ids[] = $rid;
    $this->setOption('instance', $rid);
    $this->setOption('quiz_result_ids', $result_ids);

    if ($result && ($result->score >= $this->getCourseObject()->getOption('passing_grade'))) {
      $this->setGrade($result->score)->setComplete()->save();
    }
    else {
      $this->setGrade($result->score)->save();
    }
  }

}
