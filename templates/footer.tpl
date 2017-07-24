
<div class="container">
    <div class="col-md-6 alert alert-success">
        Donate to us using the Ethereum Wallet Address below!
    <br>
        <div>
            <strong>0x1c5f939856044dfd310045c297f26a1d58d829ce</strong>
        </div>
    </div>
</div>

<footer class="text-center">
	© Copyright {$year} <a href="{$domainname}">{$title}</a><br>
	<!-- Built Using <a href="http://epay.info" target="_blank">ePay.info</a> - 2014-{$year} -->
</footer>
<br>

	</div>
	<div class="col-md-3 hidden-xs text-center"  style="padding-top:35px;">{$ads_right}</div>
	</div>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="templates/style/javascript/common.js" type="text/javascript"></script>
    <script>
    $(document).ready(function() {
        var url = this.location.pathname;
        var filename = url.substring(url.lastIndexOf('/')+1);
        $('a[href="' + filename + '"]').parent().addClass('active');
    });
    </script>
</body>
</html>