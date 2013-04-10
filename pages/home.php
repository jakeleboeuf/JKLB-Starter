<? // This is the main section ?>
<div id="main" role="main">
<script src="https://checkout.stripe.com/v2/checkout.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>

  <button id="customButton">Purchase</button>

  <script>
    $('#customButton').click(function(){
      var token = function(res){
        var $input = $('<input type=hidden name=stripeToken />').val(res.id);
        $('form').append($input).submit();
      };

      StripeCheckout.open({
        key:         'pk_PwggSM0VTSNjT1uN5QwA3YFzzCnAx',
        address:     true,
        amount:      1299,
        name:        'Will Reagan',
        description: 'Live at the Banks House',
        panelLabel:  'Pay Now - ',
				image:       'img/latbh.jpg',
        token:       token
      });

      return false;
    });
  </script>
</div>