<?php
session_start();

/**
 * Check if user is logged in with 'admin' role
 */
function isAdmin() {
    return isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin';
}

/**
 * Check if user is logged in with 'editor' role
 */
function isEditor() {
    return isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'editor';
}

/**
 * Require specific user role to access a page
 * Redirects to login.php if role doesn't match
 */
function requireRole($role) {
    if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== $role) {
        // Optionally you could redirect to a "403 Forbidden" page instead
        header("Location: login.php");
        exit;
    }
}

/**
 * Require any logged-in user (admin or editor)
 */
function requireLogin() {
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit;
    }
}
?>
