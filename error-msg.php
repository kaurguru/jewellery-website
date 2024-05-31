<?php if (isset($_SESSION['message'])) { ?>
                <div id="message" class="field-error"><?= $_SESSION['message']; ?></div>
                <?php unset($_SESSION['message']); ?>
                <script>
                    // Wait for 5 seconds and then remove the message element
                    setTimeout(function () {
                        var messageElement = document.getElementById('message');
                        if (messageElement) {
                            messageElement.remove();
                        }
                    }, 5000);
                </script>
            <?php } ?>