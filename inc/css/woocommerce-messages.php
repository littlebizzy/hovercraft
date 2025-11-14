<?php
// styles for woocommerce messages
?>

/* wrapper */
.woocommerce-notices-wrapper .woocommerce-message {
    position: relative;
    display: flex !important;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 14px;
    padding: 16px 18px 16px 52px;
    margin-bottom: 30px !important;
    background: #f3faf4;
    color: <?php echo $default_text_color; ?> !important;
    border: none !important;
    border-radius: 4px;
}

/* remove default borders and icons from woo messages */
.woocommerce-message::before,
.woocommerce-message::after,
.woocommerce-info::before,
.woocommerce-info::after,
.woocommerce-error::before,
.woocommerce-error::after {
    content: none !important;
    display: none !important;
    border: none !important;
}

/* remove default borders and icons from woo messages */
.woocommerce-message,
.woocommerce-info,
.woocommerce-error {
    border: none !important;
    box-shadow: none !important;
}

/* style any buttons inside woo messages */
.woocommerce-message .button {
    margin-left: auto !important;
    order: 2;
    border-radius: 999px;
    padding: 8px 20px !important;
    font-size: 14px !important;
    font-weight: 600;
    background: <?php echo $default_link_color; ?> !important;
    color: #ffffff !important;
    border: none !important;
}

/* hover any buttons inside woo messages */
.woocommerce-message .button:hover {
    background: <?php echo $default_hover_color; ?> !important;
    color: #ffffff !important;
}
