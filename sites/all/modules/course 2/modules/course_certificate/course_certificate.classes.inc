<?php

class CourseObjectCertificate extends CourseObject {

  public function take() {
    global $user;
    // Fulfill immediately.
    $this->getFulfillment($user)->setComplete(1)->save();
    return l(t('Download certificate'), "node/" . $this->getCourseNid() . "/certificate");
  }

  public function optionsDefinition() {
    $options = parent::optionsDefinition();
    $options['required'] = 0;
    $options['certificate_node'] = 1;
    return $options;
  }

  public function optionsForm(&$form, &$form_state) {
    parent::optionsForm($form, $form_state);
    $options = $this->getOptions();

    $form['certificate_node'] = array(
      '#title' => t('Use node settings from Certificate'),
      '#type' => 'checkbox',
      '#default_value' => $options['certificate_node'],
      '#description' => t('This will direct the user to node/%course/certificate'),
      '#disabled' => TRUE,
    );
  }

  public function getTakeType() {
    return 'content';
  }

  public function getCloneAbility() {
    return TRUE;
  }

  public static function getMaxOccurences() {
    return 1;
  }

}
