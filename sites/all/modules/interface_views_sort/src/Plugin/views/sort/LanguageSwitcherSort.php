<?php
namespace Drupal\interface_views_sort\Plugin\views\sort;

use Drupal\Core\Cache\Cache;
use Drupal\Core\Cache\CacheableDependencyInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\views\Plugin\views\HandlerBase;
use Drupal\Core\Language\LanguageInterface;

/**
* Basic sort handler for dates.
*
* This handler enables granularity, which is the ability to make dates
* equivalent based upon nearness.
*
* @ViewsSort("language_switcher_sort")
*/

class LanguageSwitcherSort extends HandlerBase implements CacheableDependencyInterface {

    protected function defineOptions() {
        return parent::defineOptions();
    }

    /**
    * Basic options for all sort criteria
    */
    public function buildOptionsForm(&$form, FormStateInterface $form_state) {
        parent::buildOptionsForm($form, $form_state);
    }

    protected function sortValidate(&$form, FormStateInterface $form_state) {}

    public function sortSubmit(&$form, FormStateInterface $form_state) {}

    /**
    * {@inheritdoc}
    */
    public static function trustedCallbacks() {
        $callbacks = parent::trustedCallbacks();
        $callbacks[] = 'preRenderFlattenData';
        return $callbacks;
    }

    /**
    * Provide default options for exposed sorts.
    */
    public function defaultExposeOptions() {
        $this->options['expose'] = [
            'label' => $this->definition['title'],
        ];
    }

    /**
    * {@inheritdoc}
    */
    public function getCacheMaxAge() {
        // The result of a sort does not depend on outside information, so by
        // default it is cacheable.
        return Cache::PERMANENT;
    }

    /**
    * {@inheritdoc}
    */
    public function getCacheContexts() {
        $cache_contexts = [];
        // Exposed sorts use GET parameters, so it depends on the current URL.
        if ($this->isExposed()) {
            $cache_contexts[] = 'url.query_args:sort_by';
        }
        return $cache_contexts;
    }

    /**
    * {@inheritdoc}
    */
    public function getCacheTags() {
        return [];
    }

    /**
    * Called to add the sort to a query.
    */
    public function query() {
        $currentLangcode = \Drupal::languageManager()->getCurrentLanguage(LanguageInterface::TYPE_CONTENT)->getId();
        $language = "FIELD(node_field_data.langcode, '$currentLangcode')";
        $this->query->addField(NULL, $language, 'language');
        $this->query->addOrderBy(NULL, NULL, 'DESC', 'language');
    }

}