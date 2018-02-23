<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
<style>
  article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
</style>
    </head>
    
    <body>
        <h1 text-align=centre>Welcome to Liam Grainger's E-Business</h1>
        <hr>
        <article>
  
  <p>Below are a range of Cloud Services Products which are available at very good cheap price for you. All products come with the standard guarantees,warantees and all promotions abide by the ASAI's 2018 guidlines. The earliest roots of the company trace back to 1913, when the mother of Karl and Theo Albrecht opened a small store in a suburb of Essen. Their father was employed as a miner and later as a baker's assistant. Karl Albrecht was born in 1920, Theo Albrecht in 1922. Theo Albrecht completed an apprenticeship in his mother's store, while Karl Albrecht worked in a delicatessen.

  Karl Albrecht took over the cloud services shop formerly run by F. W. Judt who already advertised that they were the "cheapest cloud services source". Karl Albrecht served in the German Army during World War II. In 1946, the brothers took over their mother's business and soon opened another retail outlet nearby. By 1950, the Albrecht brothers owned 13 stores in the Ruhr Valley</p>
  <p> For many years, our store has garnered global attenntion for the myriad of services we offer and the cocktail of cheap affordable products and the hgihest of customer care we offer.Our creative vision will inspire customer confidence and drive growth in your revenue with dynamic calls to action. Weather your looking for a fresh approach on your communications through to branding and identity Cloud 9 have the solution to meet your needs.</p>
</article>
  
            <h4>Select a Product</h4>
            
            <br/>
            
            <form method="POST" action="Ebus2.php">
              
              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br/>
              
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
              </label>
              
              <br/>
              <br/>
              
              <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="total">
                Total
                <input type="hidden" id="total" name="total" value="0.00" readonly/>
              </label>
    
              <br/>
              
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            <button onClick="calcSub()">Calculate Cost</button>
            <a role="button" href="Ebus1.php">Clear Choice</a>
    
    </body>
</html>