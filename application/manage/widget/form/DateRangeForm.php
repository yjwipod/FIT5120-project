<?php

namespace app\manage\widget\form;

class DateRangeForm
{
    protected $default = [
        'title' => '',
        'name' => '',
        'value' => '',
        'class' => '',
        'style' => '',
        'attr' => '',
        'format' => 'YYYY-MM-DD'
    ];

    /**
     * 渲染
     *
     * @param array $data
     * @return string
     */
    public function fetch($data)
    {
        $data = array_merge($this->default, $data);
        $html = '<div class="form-group"><label>' . $data['title'] . '</label>';
        $html .= '<input type="text" name="' . $data['name'] . '" value="' . $data['value'] . '" class="form-control nd-date ' . $data['class'] . '" style=" ' . $data['style'] . '" ' . $data['attr'] . ' data-format="' . $data['format'] . '" />';
        $html .= '</div>';
        return $html;
    }
}