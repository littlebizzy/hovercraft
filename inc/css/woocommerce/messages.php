<?php
// styles for woocommerce messages
?>

/* success message wrapper */
.woocommerce-message {
    position: relative;
    display: flex !important;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 14px;
    padding: 16px 18px;
    margin-bottom: 30px !important;
    background: #f3faf4;
    color: <?php echo $default_text_color; ?> !important;
    border: none !important;
    border-radius: 4px;
}

/* remove all woo pseudo icons */
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

/* remove all woo borders and shadows */
.woocommerce-message,
.woocommerce-info,
.woocommerce-error {
    border: none !important;
    box-shadow: none !important;
}

/* style any buttons inside success messages */
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

/* hover state for success message buttons */
.woocommerce-message .button:hover {
    background: <?php echo $default_hover_color; ?> !important;
    color: #ffffff !important;
}
