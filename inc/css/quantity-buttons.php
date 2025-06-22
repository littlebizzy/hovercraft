<?php
// styles for quantity buttons (woocommerce)
?>

.quantity.buttons-added {
    display: inline-flex !important;
    align-items: center !important;
    border: 1px solid #ccc !important;
    border-radius: 4px !important;
    overflow: hidden !important;
    padding: 0 !important;
    background: #fff !important;
}

.quantity-button {
    width: 40px !important;
    height: 40px !important;
    font-size: 20px !important;
    background: #f2f2f2 !important;
    color: #333 !important;
    border: none !important;
    margin: 0 !important;
    padding: 0 !important;
    cursor: pointer !important;
    user-select: none !important;
    line-height: 1 !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    transition: background 0.2s ease !important;
}

.quantity-button:hover {
    background: #e0e0e0 !important;
}

.quantity input.quantity {
    width: 60px !important;
    height: 40px !important;
    font-size: 16px !important;
    text-align: center !important;
    border: none !important;
    padding: 0 !important;
    margin: 0 !important;
    box-shadow: none !important;
    outline: none !important;
    background: #fff !important;
    color: #000 !important;
    -moz-appearance: textfield !important;
    cursor: default !important;
}

.quantity input.quantity::-webkit-outer-spin-button,
.quantity input.quantity::-webkit-inner-spin-button {
    -webkit-appearance: none !important;
    margin: 0 !important;
}

.quantity input.quantity[type="number"] {
    -moz-appearance: textfield !important;
}
