<div style="margin:132px auto;width:250px;">
    <a href="javascript:addPageTab()" class="button" style="width:250px;">
        ADD PAGE TAB
    </a>
</div>

<?php echo $this->Html->scriptStart(['block' => true]); ?>
function addPageTab(){
    window.open(
        "http://www.facebook.com/dialog/pagetab?app_id=1592426251025309&next=http://facebook.labs.vn",
        "_blank",
        "width=982,height=450,toolbar=no,location=no,resizable=no"
    );
}

function addTab() {
    FB.ui({
        method: 'pagetab',
        app_id: '1592426251025309',
        //redirect_uri: 'https://facebook.com/'
    }, function(response){
        console.log(response);
    });
}
<?php echo $this->Html->scriptEnd(); ?>
