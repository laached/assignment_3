import sys
import datetime

def result_steps_html(x, y, z):
    if z == 0:
        return "<p style='color:red;'>Error: value of 'z' can't be zero (division by zero).</p>"
      
    html_response = []
    html_response.append(f"<h2>Python Script result:</h2>")
    html_response.append(f"<h3>Original values:</h3>")
    html_response.append("<ul>")
    html_response.append(f"<li>x : {x}</li>")
    html_response.append(f"<li>y : {y}</li>")
    html_response.append(f"<li>z : {z}</li>")
    html_response.append("</ul>")
    html_response.append("<ol>")
    html_response.append(f"<li><strong>Step 1:</strong> Initial value of x = {x}</li>")
    
    x += y
    html_response.append(f"<li>After x += y: {x}</li>")
    
    x -= z
    html_response.append(f"<li>After x -= z: {x}</li>")
    
    x *= y
    html_response.append(f"<li>After x *= y: {x}</li>")
    
    x %= z
    html_response.append(f"<li>After x %= z: {x}</li>")
    x /= z
    html_response.append(f"<li>After x /= z: {x}</li>")
    
    final_result = x + y + z
    html_response.append(f"<li><strong>Final result</strong> x + y + z : {x} + {y} + {z} = {final_result}</li>")
    html_response.append("</ol>")

    return "\n".join(html_response)


try:
    x = float(sys.argv[1])
    y = float(sys.argv[2])
    z = float(sys.argv[3])
except (IndexError, ValueError):
    print("Error: Input must be a number.")
    sys.exit(1)

print(result_steps_html(x, y, z))
