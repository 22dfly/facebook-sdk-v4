<div style="margin:132px auto;width:250px;">
    <a href="javascript:loginFacebook()" class="button" style="width:250px;">
        LOGIN WITH FACEBOOK
    </a>
</div>

<?php echo $this->Html->scriptStart(['block' => true]); ?>
function loginFacebook() {
    FB.login(
        function(response) {
            $.cookie("user_id", response.authResponse.userID);
            $.cookie("access_token", response.authResponse.accessToken);
            window.top.location = "<?php echo $this->Url->build(['controller' => 'users', 'action' => 'login_redirect']) ?>";
        }, 
        {scope: '<?php echo FACEBOOK_SCOPE ?>'}
    );
}
<?php echo $this->Html->scriptEnd(); ?>
