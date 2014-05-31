<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Core\Component\Form\Elements;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Class FieldsetLanguage
 *
 * @package WellCommerce\Core\Component\Form\Elements
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class FieldsetLanguage extends Fieldset implements ElementInterface
{
    protected $languages = [];

    public function __construct($attributes)
    {
        parent::__construct($attributes);

        $this->languages = $attributes['languages'];
        $count           = count($this->languages);

        $this->attributes['repeat_min'] = $count;
        $this->attributes['repeat_max'] = $count;
    }

    /**
     * {@inheritdoc}
     */
    public function configureAttributes(OptionsResolverInterface $resolver)
    {
        $resolver->setRequired([
            'name',
            'languages'
        ]);

        $resolver->setOptional([
            'class',
            'label',
            'repeat_min',
            'repeat_max',
        ]);

        $resolver->setAllowedTypes([
            'name'       => 'string',
            'label'      => 'string',
            'class'      => 'string',
            'languages'  => 'array',
            'repeat_min' => 'integer',
            'repeat_max' => 'integer',
        ]);
    }

    protected function formatLanguagesJs()
    {
        $options = [];
        foreach ($this->languages as $language) {
            $value     = addslashes($language['id']);
            $label     = addslashes($language['translation']);
            $flag      = addslashes(sprintf('%s.png', substr($language['name'], 0, 2)));
            $options[] = "{sValue: '{$value}', sLabel: '{$label}',sFlag: '{$flag}' }";
        }

        return 'aoLanguages: [' . implode(', ', $options) . ']';
    }

    /**
     * {@inheritdoc}
     */
    public function prepareAttributesJs()
    {
        $attributes = Array(
            $this->formatAttributeJs('name', 'sName'),
            $this->formatAttributeJs('label', 'sLabel'),
            $this->formatRepeatableJs(),
            $this->formatDependencyJs(),
            $this->formatLanguagesJs(),
            'aoFields: [' . $this->renderChildren() . ']'
        );

        return $attributes;
    }

}
