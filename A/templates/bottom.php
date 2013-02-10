		</div>
		
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="js/jquery.shadow/jquery.shadow.js"></script>
		<script src="js/chosen.jquery.min.js"></script>
		
		<script type="text/javascript">	
			$(document).ready(function() {
				$('#chosen').chosen();
				$('.imgSub').on('click', function() {
					$('.imgMain').attr('src', $(this).attr('src'));
				});
			} );
		</script>
	</body>
</html>