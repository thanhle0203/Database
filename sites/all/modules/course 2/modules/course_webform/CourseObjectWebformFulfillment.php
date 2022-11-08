<?php

/**
 * Course fulfillment class for webforms.
 */
class CourseObjectWebformFulfillment extends CourseObjectNodeFulfillment {

  /**
   * Define storage for submission IDs.
   */
  function optionsDefinition() {
    return array('sids' => array());
  }

  /**
   * Remove all webform submissions associated with this fulfillment.
   */
  function delete() {
    parent::delete();
    $co = $this->getCourseObject();
    $node = $co->getNode();
    if ($sids = $this->getOption('sids')) {
      module_load_include('inc', 'webform', 'includes/webform.submissions');
      foreach ($sids as $sid) {
        if ($submission = webform_get_submission($node->nid, $sid)) {
          webform_submission_delete($node, $submission);
        }
      }
    }
  }
}
