<?php
if (class_exists('WP_Customize_Control')) {
    class WP_Category_Checkboxes_Control extends WP_Customize_Control {

        public $type = 'category-checkboxes';

        public function render_content() {
            echo '<script src="' . get_template_directory_uri() . '/js/theme-customizer.js"></script>';
            echo '<span class="customize-control-title">' . esc_html($this->label) . '</span>';
            foreach (get_categories() as $category) {
                echo '<label><input type="checkbox" name="category-' . $category->term_id . '" id="category-' . $category->term_id . '" class="cstmzr-category-checkbox"> ' . $category->cat_name . '</label><br>';
            }
            ?>
            <input type="hidden" id="<?php echo $this->id; ?>" class="cstmzr-hidden-categories" <?php $this->link(); ?> value="<?php echo sanitize_text_field($this->value()); ?>">
            <?php
        }

    }
}