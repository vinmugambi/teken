<template>
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="FGN3KW2YLRX7E">
<input type="submit" value="Donate" name="submit" border="0" alt="PayPal - The safer, easier way to pay online!" class="rounded-lg py-2 px-2 font-bold bg-blue-500 text-white">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</template>

<script>
export default {
}
</script>

<style>
  #paypal-button {
    cursor: pointer;
  }
</style>