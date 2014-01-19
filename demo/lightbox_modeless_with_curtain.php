<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Lightbox</title>		
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="../jquery.lightbox.js"></script>
		<style type="text/css">
			.popup {
				display: none;
				position: absolute;
				z-index: 100;
				overflow: hidden;	
				background: #ccc;
				padding: 20px;
				width: 400px;
			}
			.popup .close {
				cursor: pointer;
				text-align: right;
				margin: 0;
			}			
		</style>		
		<script>
			$(function() {				
				$('button').click(function() {
					$('.popup').lightbox({						
						top: 20,
					});
				});			
			});
		</script>
	</head>
	<body>
		<h3>Lightbox</h3>	
		<p>Popup on this example is non-modal, that is clicking background will close the popup.</p>
		<p><button>Show Modeless Popup</button></p>
		<div class="popup">
			<p class="close"><img src="images/close.png" alt="Close" /></p>
			<div>					
				<p>Lorem ipsum dolor sit amet, lucina eodem in modo ad per sanctus ait est in. Dionysiadem in deinde duas formis ei, patrem dixit eos Communicatio mihi quidditas.</p>
				<p>Lorem ipsum dolor sit amet, duc quia ad quia. Praesta enim formam se in rei exultant deo adiuves finem ibi Neptune reddens pater vero diam '. Discumbens ut diem obiecti prius superare vasa omnes deo adiuves finem. Stranguillionem ubi ait Cumque ego esse in lucem in fuerat construeret cena reges undis effugere quod ait Cumque hoc. Perihermeneias Apollonium contigit cum autem est amet consensit cellula rei civibus unde meae sit Mariae Bone de me missam! Ipsam consistit ait regem ut diem fiant in deinde vero quo. 'Iuraveras magnifice ex sic nec benedictus ad te ad suis caelo in modo cavendum es ego illum Apollonii vidit tam. Theophilus ut sua in deinde cepit roseo. Tharsos vindicem a civitas ad quia ei primum intus puella mihi Tyrum reverteretur ad quia ei primum intus. Salve quos ducem cum obiectum dixit regem adventu nihil labore in. Zurziaca in lucem exempli paupers coniunx caritate completae ad suis est amet amet consensit cellula rei finibus veteres hoc. Fecisti option coniuges miscebat cui sed dominum sit audivit mihi servitute meam celaveritis ac optime sit in. Antiochiam innocentem vis proprium ait regem ut sua etiam quantitas devenit potest in. Se ad quia ad suis Tyrium coniugem Chaldaeorum in. Iussit est amet amet coram regis suam vidit loco balbutienti servis meo in deinde cupis hominem inquam cives.</p>
				<p>Lorem ipsum dolor sit amet, duc quia ad quia. Praesta enim formam se in rei exultant deo adiuves finem ibi Neptune reddens pater vero diam '. Discumbens ut diem obiecti prius superare vasa omnes deo adiuves finem. Stranguillionem ubi ait Cumque ego esse in lucem in fuerat construeret cena reges undis effugere quod ait Cumque hoc. Perihermeneias Apollonium contigit cum autem est amet consensit cellula rei civibus unde meae sit Mariae Bone de me missam! Ipsam consistit ait regem ut diem fiant in deinde vero quo. 'Iuraveras magnifice ex sic nec benedictus ad te ad suis caelo in modo cavendum es ego illum Apollonii vidit tam. Theophilus ut sua in deinde cepit roseo. Tharsos vindicem a civitas ad quia ei primum intus puella mihi Tyrum reverteretur ad quia ei primum intus. Salve quos ducem cum obiectum dixit regem adventu nihil labore in. Zurziaca in lucem exempli paupers coniunx caritate completae ad suis est amet amet consensit cellula rei finibus veteres hoc. Fecisti option coniuges miscebat cui sed dominum sit audivit mihi servitute meam celaveritis ac optime sit in. Antiochiam innocentem vis proprium ait regem ut sua etiam quantitas devenit potest in. Se ad quia ad suis Tyrium coniugem Chaldaeorum in. Iussit est amet amet coram regis suam vidit loco balbutienti servis meo in deinde cupis hominem inquam cives.</p>					
				<p>Lorem ipsum dolor sit amet, duc quia ad quia. Praesta enim formam se in rei exultant deo adiuves finem ibi Neptune reddens pater vero diam '. Discumbens ut diem obiecti prius superare vasa omnes deo adiuves finem. Stranguillionem ubi ait Cumque ego esse in lucem in fuerat construeret cena reges undis effugere quod ait Cumque hoc. Perihermeneias Apollonium contigit cum autem est amet consensit cellula rei civibus unde meae sit Mariae Bone de me missam! Ipsam consistit ait regem ut diem fiant in deinde vero quo. 'Iuraveras magnifice ex sic nec benedictus ad te ad suis caelo in modo cavendum es ego illum Apollonii vidit tam. Theophilus ut sua in deinde cepit roseo. Tharsos vindicem a civitas ad quia ei primum intus puella mihi Tyrum reverteretur ad quia ei primum intus. Salve quos ducem cum obiectum dixit regem adventu nihil labore in. Zurziaca in lucem exempli paupers coniunx caritate completae ad suis est amet amet consensit cellula rei finibus veteres hoc. Fecisti option coniuges miscebat cui sed dominum sit audivit mihi servitute meam celaveritis ac optime sit in. Antiochiam innocentem vis proprium ait regem ut sua etiam quantitas devenit potest in. Se ad quia ad suis Tyrium coniugem Chaldaeorum in. Iussit est amet amet coram regis suam vidit loco balbutienti servis meo in deinde cupis hominem inquam cives.</p>
			</div>
		</div>	
		<p>Lorem ipsum dolor sit amet, duc quia ad quia. Praesta enim formam se in rei exultant deo adiuves finem ibi Neptune reddens pater vero diam '. Discumbens ut diem obiecti prius superare vasa omnes deo adiuves finem. Stranguillionem ubi ait Cumque ego esse in lucem in fuerat construeret cena reges undis effugere quod ait Cumque hoc. Perihermeneias Apollonium contigit cum autem est amet consensit cellula rei civibus unde meae sit Mariae Bone de me missam! Ipsam consistit ait regem ut diem fiant in deinde vero quo. 'Iuraveras magnifice ex sic nec benedictus ad te ad suis caelo in modo cavendum es ego illum Apollonii vidit tam. Theophilus ut sua in deinde cepit roseo. Tharsos vindicem a civitas ad quia ei primum intus puella mihi Tyrum reverteretur ad quia ei primum intus. Salve quos ducem cum obiectum dixit regem adventu nihil labore in. Zurziaca in lucem exempli paupers coniunx caritate completae ad suis est amet amet consensit cellula rei finibus veteres hoc. Fecisti option coniuges miscebat cui sed dominum sit audivit mihi servitute meam celaveritis ac optime sit in. Antiochiam innocentem vis proprium ait regem ut sua etiam quantitas devenit potest in. Se ad quia ad suis Tyrium coniugem Chaldaeorum in. Iussit est amet amet coram regis suam vidit loco balbutienti servis meo in deinde cupis hominem inquam cives.</p>		
	</body>
</html>
