<!DOCTYPE html> 
<html> 
<head> 
    <title>View Order</title> 

<body>
                        <form onsubmit="showOrderStatus(); return false;">
                            <select name="order_status" id="order_status">
                              <option value="In Progress">In Progress</option>
                              <option value="Delivered">Delivered</option>
                            </select>
                        
                            <input type="submit" value="Submit">
                          </form>

                      <div id="result"></div>

        <script>
             function showOrderStatus() {
      // Get the selected value from the dropdown
      const selectedStatus = document.getElementById('order_status').value;

      // Display the result in a div with id 'result'
      document.getElementById('result').innerHTML = `Selected Order Status: ${selectedStatus}`;
    }
        </script>
    </body>
</html>

