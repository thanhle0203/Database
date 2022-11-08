<?php

class CourseObjectPollFulfillment extends CourseObjectNodeFulfillment {

  /**
   * Remove poll votes for this user.
   */
  function delete() {
    $account = user_load($this->uid);

    db_delete('poll_vote')
      ->condition('nid', $this->getCourseObject()->getInstanceId())
      ->condition('uid', $account->uid)
      ->execute();
    db_update('poll_choice')
      ->expression('chvotes', 'chvotes - 1')
      ->condition('chid', $this->getOption('instance'))
      ->execute();

    parent::delete();
  }

}
