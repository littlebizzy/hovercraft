<?php
// styles for comments
?>

/*comments */

/* remove bullets from all comment lists */
ul.comments-list,
ul.comment-list,
ul.comment-list ul,
ul.children,
ul.comment-list .children,
ul.comment-list li {
    list-style: none;
    margin: 0;
    padding: 0;
}

/* comment body styling */
.comment-body {
    margin-bottom: 30px;
    border-bottom: 1px solid #ddd;
    padding-bottom: 20px;
}

/* author name */
.comment-author {
    font-weight: bold;
    margin-bottom: 4px;
}

/* comment meta */
.comment-meta {
    font-size: 14px;
    color: #666;
    margin-bottom: 10px;
}

/* comment content */
.comment-content {
    font-size: 16px;
    line-height: 1.6;
}

/* reply link */
.comment-reply-link {
    font-size: 14px;
    display: inline-block;
    margin-top: 10px;
    color: #0073aa;
    text-decoration: none;
}

.comment-reply-link:hover {
    text-decoration: underline;
}

/* nested comments */
.comment-list .children {
    margin-left: 2rem;
    margin-top: 1rem;
}

/* pagination */
.comment-navigation {
    margin-top: 20px;
    display: flex;
    justify-content: space-between;
    font-size: 14px;
}

.comment-nav-prev,
.comment-nav-next {
    flex: 1;
}

/* comment form */
#respond textarea,
#respond input[type="text"],
#respond input[type="email"],
#respond input[type="url"] {
    width: 100%;
    max-width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    font-size: 16px;
}

#respond input[type="submit"] {
    padding: 10px 20px;
    background-color: #0073aa;
    color: #fff;
    border: none;
    cursor: pointer;
}

#respond input[type="submit"]:hover {
    background-color: #005f8d;
}
