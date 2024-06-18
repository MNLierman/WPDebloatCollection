
// Removes annoying spam and junk admin notices that appear when you login.

add_action('admin_head', 'remove_spam_admin_notices');

function remove_spam_admin_notices() {
    // Define the list of spam terms
    $spamTerms = ['register', 'activate', 'activation' 'subscribe', 'subscription', 'opt-in', 'opt-out',
                  'nag', 'offer', 'promotion', 'promo', 'upgrade', 'purchase', 'buy now', 'buy later',
                  'pro', 'premium', 'advertisement', 'license'];

    // Define the list of exception terms for successful actions or important notices
    $exceptions = ['successfully', 'updated', 'database', 'update required', 'upgrade the database',
                   'update complete', 'update failed'];

    ?>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        // Convert PHP arrays into JavaScript arrays
        var spamTerms = <?php echo json_encode($spamTerms); ?>;
        var exceptions = <?php echo json_encode($exceptions); ?>;

        // Function to check if the text includes any spam term
        function containsSpamTerm(text) {
            return spamTerms.some(function(term) {
                return text.includes(term);
            });
        }

        // Function to check if the text includes any exception term
        function containsException(text) {
            return exceptions.some(function(exception) {
                return text.includes(exception);
            });
        }
        
        // Remove any admin notices that contain spam terms in their class, id, or text.
        // This is a pretty comprehensive and premetive list of terms, and should cover current or future attempts to annoy you. 
        $('div.notice, div.note, div.update, div.updated, div.message, div.msg, div.nag, div.alert,
           div.warning, div.info, div.error, div.success, div.fail, div.feedback, div.prompt, div.status,
           div.notification, div.callout, div.announcement, div.banner, div.reminder, div.suggestion,
           div.guidance, div.instruction, div.advice, div.message-box, div.alert-box, div.modal,
           div.popup', [class*="license"], [id*="license"], [class*="activate"], [id*="activate"],
           [class*="activation"], [id*="activation"]').each(function() {

            var noticeText = $(this).text().toLowerCase();
            var noticeClass = $(this).attr('class').toLowerCase();
            var noticeId = $(this).attr('id') ? $(this).attr('id').toLowerCase() : '';

            // Check if the notice contains any spam term and not an exception
            if ((containsSpamTerm(noticeText) || containsSpamTerm(noticeClass) || containsSpamTerm(noticeId)) && !containsException(noticeText)) {
                $(this).remove();
        });
    });
    </script>
    <?php
}
