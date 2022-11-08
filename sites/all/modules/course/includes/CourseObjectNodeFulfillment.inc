<?php

/**
 * Course object node fulfillment.
 *
 * Represents the fulfillment record in the database.
 *
 */
class CourseObjectNodeFulfillment extends CourseObjectFulfillment {

  /**
   * Grant access to course content before going to it.
   */
  function grant() {
    if ($this->getCourseObject()->hasNodePrivacySupport()) {
      if ($this->getCourseObject()->getOption('private')) {
        $node = $this->getCourseObject()->getNode();
        module_load_include('inc', 'content_access', 'content_access.admin');
        $acl_id = content_access_get_acl_id($node, 'view');
        acl_add_user($acl_id, $this->uid);
        acl_node_add_acl($node->nid, $acl_id, 1, 0, 0, content_access_get_settings('priority', $node->type));
        node_access_acquire_grants($node);
      }
    }
  }

  /**
   * Revoke access to the external course object.
   *
   * For example, removing a user to an access control list.
   *
   */
  function revoke() {
    if ($this->getCourseObject()->hasNodePrivacySupport()) {
      if ($this->getCourseObject()->getOption('private')) {
        $node = $this->getCourseObject()->getNode();
        module_load_include('inc', 'content_access', 'content_access.admin');
        $acl_id = content_access_get_acl_id($node, 'view');
        acl_remove_user($acl_id, $this->uid);
        node_access_acquire_grants($node);
      }
    }
  }

  /**
   * Revoke content access before the fulfillment is deleted.
   */
  function delete() {
    $this->revoke();
    parent::delete();
  }

}
