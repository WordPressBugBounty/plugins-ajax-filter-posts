<?php
/**
 * Gridmaster Taxonomy Filter Template
 * Name: Style 2
 *
 * @package Gridmaster
 * @since 1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Taxonomy Args
$tax_args = $args['tax_args'];

// Get category terms
$tax_terms = get_terms( $tax_args );

$taxonomy     = $tax_args['taxonomy'];
$grid_id      = $args['grid_id'];
$input_type   = $args['input_type'];
$filter_style = $args['filter_style'];

$input_name = 'tax_input[' . $taxonomy . '][]';
$input_id   = $grid_id . '-' . $taxonomy . '_all';

if ( $tax_terms && ! is_wp_error( $tax_terms ) ) : ?>
	
	<div class="gm-taxonomy-filter <?php echo esc_attr( " gm-tax-filter-style-{$filter_style} gm-filter-grid-id-{$grid_id} " ); ?>">
        <?php echo gm_taxonomy_item_all( $args ); // phpcs:ignore ?>
		<?php
		foreach ( $tax_terms as $term ) :
			$taxonomy   = $term->taxonomy;
			$input_id   = $grid_id . '-' . $taxonomy . '_' . $term->term_id;
			$input_name = 'tax_input[' . $taxonomy . '][]';
			?>
			<div class="gm-taxonomy-item">
				<input type="<?php echo esc_attr( $input_type ); ?>" name="<?php echo esc_attr( $input_name ); ?>" id="<?php echo esc_attr( $input_id ); ?>" value="<?php echo esc_attr( $term->term_id ); ?>" />
				<label class="asr_texonomy" for="<?php echo esc_attr( $input_id ); ?>"><?php echo esc_attr( $term->name ); ?></label>
			</div>
		<?php endforeach; ?>
	</div>
<?php endif; ?>

<style>
.gm-taxonomy-filter.gm-tax-filter-style-style-4 {
	flex-wrap: nowrap;
	overflow: scroll;
}
.asr-filter-div .gm-tax-filter-style-style-4 .asr_texonomy {
	margin-right: 15px;
	border: 0;
	padding-left: 2px;
	opacity: 0.9;
}
.gm-tax-filter-style-style-4 .gm-taxonomy-item input:checked + label,
.gm-tax-filter-style-style-4 .asr_texonomy:hover{
	border-bottom-color: #333333;
	background: transparent;
	opacity: 1;
}
.gm-tax-filter-style-style-4.gm-taxonomy-filter input[type=checkbox], 
.gm-tax-filter-style-style-4.gm-taxonomy-filter input[type=radio]{
	display: unset;
}
</style>