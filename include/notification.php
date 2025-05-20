<?php
// Check for newsletter subscription notifications
function showNewsletterNotification() {
    if (isset($_GET['newsletter'])) {
        $status = $_GET['newsletter'];
        $message = '';
        $type = '';
        
        switch ($status) {
            case 'success':
                $message = 'You have successfully subscribed to our newsletter! You will receive a confirmation email shortly.';
                $type = 'success';
                break;
            case 'exists':
                $message = 'This email is already subscribed to our newsletter.';
                $type = 'info';
                break;
            case 'invalid':
                $message = 'Please enter a valid email address.';
                $type = 'error';
                break;
            case 'error':
                $message = 'Your subscription was successful, but the confirmation email could not be sent.';
                $type = 'warning';
                break;
            case 'dberror':
                $message = 'An error occurred during subscription. Please try again later.';
                $type = 'error';
                break;
        }
        
        if (!empty($message)) {
            echo '<div class="toast-notification toast-' . $type . '" id="toast-notification">
                    <div class="toast-icon">
                        <i class="fas fa-' . ($type == 'success' ? 'check-circle' : ($type == 'info' ? 'info-circle' : ($type == 'warning' ? 'exclamation-triangle' : 'times-circle'))) . '"></i>
                    </div>
                    <div class="toast-content">
                        <div class="toast-title">' . ($type == 'success' ? 'Success!' : ($type == 'info' ? 'Information' : ($type == 'warning' ? 'Warning' : 'Error'))) . '</div>
                        <div class="toast-message">' . $message . '</div>
                    </div>
                    <button class="toast-close" onclick="closeToast()"><i class="fas fa-times"></i></button>
                  </div>';
            
            echo '<script>
                    setTimeout(function() {
                        document.getElementById("toast-notification").classList.add("show");
                        
                        // Progress bar animation
                        var progress = document.createElement("div");
                        progress.className = "toast-progress";
                        document.getElementById("toast-notification").appendChild(progress);
                        
                        progress.style.width = "100%";
                        progress.style.transition = "width 5s linear";
                        
                        setTimeout(function() {
                            progress.style.width = "0%";
                        }, 100);
                        
                        setTimeout(function() {
                            closeToast();
                        }, 5000);
                    }, 300);
                    
                    function closeToast() {
                        var toast = document.getElementById("toast-notification");
                        if (toast) {
                            toast.classList.remove("show");
                            toast.classList.add("hide");
                            
                            setTimeout(function() {
                                toast.style.display = "none";
                            }, 500);
                        }
                    }
                  </script>';
        }
    }
}
?>

<style>
.toast-notification {
    position: fixed;
    bottom: 30px;
    right: 30px;
    display: flex;
    align-items: center;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    padding: 16px;
    width: 380px;
    z-index: 9999;
    transform: translateY(100px);
    opacity: 0;
    transition: all 0.4s cubic-bezier(0.68, -0.55, 0.27, 1.55);
    overflow: hidden;
    border-left: 5px solid #ccc;
}

.toast-notification.show {
    transform: translateY(0);
    opacity: 1;
}

.toast-notification.hide {
    transform: translateY(100px);
    opacity: 0;
}

.toast-icon {
    margin-right: 15px;
    font-size: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: rgba(0, 0, 0, 0.05);
}

.toast-content {
    flex: 1;
}

.toast-title {
    font-weight: bold;
    margin-bottom: 5px;
    font-size: 16px;
}

.toast-message {
    font-size: 14px;
    color: #555;
    line-height: 1.4;
}

.toast-success {
    border-left-color: #4CAF50;
}

.toast-info {
    border-left-color: #2196F3;
}

.toast-warning {
    border-left-color: #FF9800;
}

.toast-error {
    border-left-color: #F44336;
}

.toast-success .toast-icon {
    color: #4CAF50;
    background-color: rgba(76, 175, 80, 0.1);
}

.toast-info .toast-icon {
    color: #2196F3;
    background-color: rgba(33, 150, 243, 0.1);
}

.toast-warning .toast-icon {
    color: #FF9800;
    background-color: rgba(255, 152, 0, 0.1);
}

.toast-error .toast-icon {
    color: #F44336;
    background-color: rgba(244, 67, 54, 0.1);
}

.toast-close {
    background: none;
    border: none;
    color: #999;
    cursor: pointer;
    font-size: 16px;
    padding: 0;
    margin-left: 10px;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: all 0.2s ease;
}

.toast-close:hover {
    background-color: rgba(0, 0, 0, 0.05);
    color: #333;
}

.toast-progress {
    position: absolute;
    bottom: 0;
    left: 0;
    height: 3px;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.1);
}

.toast-success .toast-progress {
    background-color: #4CAF50;
}

.toast-info .toast-progress {
    background-color: #2196F3;
}

.toast-warning .toast-progress {
    background-color: #FF9800;
}

.toast-error .toast-progress {
    background-color: #F44336;
}

@media (max-width: 480px) {
    .toast-notification {
        width: calc(100% - 40px);
        bottom: 20px;
        right: 20px;
    }
}

/* Add animation for toast appearance */
@keyframes toast-bounce {
    0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
    40% {transform: translateY(-10px);}
    60% {transform: translateY(-5px);}
}

.toast-notification.show {
    animation: toast-bounce 0.8s ease;
}
</style>