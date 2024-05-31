<h1> add new product</h1>
    <div class="form">
        <form action="process.php" method="post" >
             <div class="first">
                <div><label>discount:</label> </div>
            <div>
            <input type="number" name="discount" required placeholder="discount" >
            </div>
            
            </div>

            <div class="first">
                <div>
                <label>product image:</label>
                </div>
                <div>
                <input type="file" name="image"  required>
                </div>
           
            </div>

            <div class="first">
                <div>
                <label>karat</label> 
                </div>
                <div> 
                <input type="number" name="karat" required placeholder="karat" >
                </div>
           
            </div>

            <div class="first">
                <div>  <label>name/ description:</label></div>
                <div>
                    <input type="text" name="name" required placeholder="description" >

                     <!-- <textarea name="name" id="name" cols="70" rows="7"></textarea> -->
                </div>

            </div>

            <div class="first">
                <div>
                <label>gender:</label>
                </div>
                <div>
                    <input type="radio" name="gender" value="men"> 
                    <span>men</span>
                    <input type="radio" name="gender" value="women">
                    <span>women</span>
                </div>
           </div>

            <div class="first">
                <div>
                <label>category:</label> 
                </div>
                <div>
                <select name="category" id="category" required>
                        <option value="bangles">bangles</option>
                        <option value="earrings">earrings</option>
                        <option value="chains">chains</option>
                        <option value="necklaces">necklaces</option>
                        <option value="rings">rings</option>
                        <option value="bracelets">bracelets</option>
                        <option value="pendants">pendants</option>
                        <option value="gifts">gifts</option>
                    </select>
                </div>
                    
            </div>

               
            <div class="first">
                <div>
                <label>price:</label>
                </div>
                <div>
                <input type="number" name="price" placeholder="price"  required>
                </div>
            
            </div>

            <div class="first">
                <div><label>Quantity:</label> </div>
                <div>
                <input type="number" name="quantity" required placeholder="Quantity" >
                </div>
            </div>
            <div>
                <input type="submit" value="submit" name="submit"class="submit">
            </div>
        </form>
    </div>
  
   


