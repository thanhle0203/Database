<?php

class CourseEnrollment extends Entity {

  /**
   * Enrollment entity label callback.
   */
  function defaultLabel() {
    $node = node_load($this->nid);
    $account = user_load($this->uid);
    return t("@username's enrollment in @title", array('@username' => format_username($account), '@title' => $node->title));
  }

  /**
   * @kludge Reset the static lookup cache.
   */
  public function save() {
    if (!isset($this->timestamp)) {
      // Fix a notice because timestamp is not returned after creation.
      $this->timestamp = NULL;
    }

    $this->updated = REQUEST_TIME;
    drupal_static_reset('course_enrollment_load');
    return parent::save();
  }

}
