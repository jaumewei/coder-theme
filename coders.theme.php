<?php defined('ABSPATH') or die;
/**
 * This is the default layout in OOP.
 * 
 * Check the protected methods within.
 * 
 * Each layout construct executes a defineThemeComponents()->initialize()->setup() call
 * 
 */
final class CodersTheme extends \CODERS\Theme{
    /**
     * Iniciador del tema
     * @return \CODERS\Layout
     */
    protected final function defineThemeComponents() {
        //define los wrappers de los contenedores
        return parent::defineThemeComponents()
                ->set('wrapper_class', 'wrap clearfix')
                ->registerLogo()
                ->registerSidebar('blog',__('Blog','poly_theme_manager'))
                ->registerSidebar('top-bar',__('Barra Superior','poly_theme_manager'))
                ->registerSidebar('header',__('Cabecera','poly_theme_manager'))
                ->registerSidebar('footer-a',__('Footer A','poly_theme_manager'))
                ->registerSidebar('footer-b',__('Footer B','poly_theme_manager'))
                ->registerSidebar('footer-c',__('Footer C','poly_theme_manager'))
                ->registerSidebar('footer-d',__('Footer D','poly_theme_manager'))
                ->registerSidebar('bottom-bar',__('Barra Inferior','poly_theme_manager'))
                ->registerSidebar('error-bar',__('Error 404','poly_theme_manager'))
                //define los menús
                ->registerMenu('main', __('Principal','poly_theme_manager'))
                ->registerMenu('top', __('Secundario','poly_theme_manager'))
                ->registerMenu('legal', __('Legal','poly_theme_manager'))
                ->registerMenu('social', __('Social','poly_theme_manager'))
                ->registerAdminStyle()
                ->registerGoogleFont('Play',array(400,700))
                //soporte para VUEJS
                ->registerScript('vue-core-support', 'https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js');
    }
    /**
     * @return array Definición del Layout del tema
     */
    protected final function defineThemeLayout() {
        return [
            'site-header' => [
                'top-bar' => ['top-bar-sidebar','top-menu'],
                'header-main' => ['site-logo','header-sidebar','main-menu' ] ], //Header Block
            'site-content' => [ self::THEME_CONTENT ],
            'site-footer' => [
                'footer-widgets' => ['footer-a-sidebar','footer-b-sidebar','footer-c-sidebar','footer-d-sidebar'],
                'footer-bar' => ['legal-menu', 'bottom-bar-sidebar']
            ] ];
    }
    /**
     * Soporte para woocommmerce
     * @return array
     */
    protected final function defineThemeFeatures() {
        
        $features = parent::defineThemeFeatures();
        
        $features[] = __( 'Soporte para WooCommerce' , 'poly_theme_manager' );
        
        return $features;
    }
    /**
     * Sobrecarga para compatibilidad con WooCommerce
     * @return array
     */
    protected final function getContentType() {
        
        if(class_exists('WooCommerce') && is_woocommerce()){                
            if(is_shop() || is_product_category() || is_product_tag() || is_product_taxonomy()){
                return array( 'product' , 'loop' );
            }
            if(is_product()){
                return array( 'product' , 'single' );
            }
        }
        
        return parent::getContentType();
    }
    /**
     * @return array
     */
    protected final function defineThemeWrappers() {
        return array(
            'top-bar', 'header-main',
            //'site-content',
            'footer-widgets', 'footer-bar');
    }
    /**
     * @return array
     */
    protected final function defineThemeTags() {
        return array(
            'site-header' => 'header',
            'site-content' => 'content',
            'site-footer' => 'footer',
        );
    }
    /**
     * @return array
     */
    protected final function defineThemeIds() {
        return array('site-main','site-header','site-content','site-footer');
    }
    /**
     * Muestra la ficha de producto woocommrece
     * @param int $product_id
     */
    /*protected final function registerThemeSetup() {

        if( !function_exists('coders_woocommerce_page')){
            
            function coders_woocommerce_page( $product_id = 0 ){

                if( $product_id === 0 ){
                    $product_id = get_the_ID();
                }

                print class_exists('WC_Shortcodes') ?  WC_Shortcodes::product_page( array('id'=> $product_id ) ) : '';
            }
        }
        
        return parent::registerThemeSetup();
    }*/
}



