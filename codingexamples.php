<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding Examples - Drew Woodhouse | SCS Portfolio</title>

    <link rel="stylesheet" href="css/application.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/atom-one-dark.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="icons/favicon.PNG">
</head>
<body>
    <!--Icon Implementation-->
    
    <?php include ("php/icons.php"); ?>


    <!--Hamburger-->
    <?php include ("php/hamburger.php"); ?>
        
    <!--Navigation Section-->
    <?php include ("php/menu.php"); ?>

    <div class="flex-container">
        <?php include("php/header.php"); ?>

        <div class="container__center ishidden__section">
            <div class="section-title">
                <h2 class="h1 text-center">HTML & CSS / SASS</h2>
                <button class="toggle-section "><svg class="icon icon-chevron-circle-right"><use xlink:href="#icon-chevron-circle-right"></use></svg></button> 
                
            </div>
            <div class="section-content">
                <h3>Below you can find a code snippet used in my first project, recreating the Netmatters Homepage:</h3>
                <div class="container__code">
                <pre>
                    <code class="language-scss">
@mixin viewport($break) {
    
    @if $break == "small" { // small generally used for mobile phones 
        @media (min-width: $brkpoint-sm) and (max-width: #{$brkpoint-md - 1}) { // between 320px and 767px
            @content;
        }
    }
    @else if $break == "smedium" {
        @media (min-width: $brkpoint-smd) and (max-width: #{$brkpoint-md - 1}) { // between 650px and 767px
            @content;
        }
    }
    @else if $break == "medium" {
        @media (min-width: $brkpoint-md) and (max-width: #{$brkpoint-lg - 1}) { // between 768px and 991px
            @content;
        }
    }
    @else if $break == "large" { // large generally used for desktop monitors
        @media (min-width: $brkpoint-lg) and (max-width: #{$brkpoint-xlg - 1}) { // between 992px and 1259px
            @content;
        }
    }
    @else if $break == "x-large" { // extra large
        @media (min-width: $brkpoint-xlg) { // greater than 1260px
            @content;
        }
    }
    @else {
        @error "No value could be retrieved for break for `#{$break}`";
    }
}
                    </code>
            </pre>
                
            </div>
 
            <p> This SASS code is used all over the webpage. It allows the use of styling certain elements at certain screen sizes. With this mixin, you call it within the CSS somewhere
                using the example code snippet below:
            </p>

            <div class="container__code">
                <pre>
                    <code class="language-scss">
@include viewport(large) {
    width: 30%;
}
                    </code>
                </pre>

            </div>

            <p>In this example, I'm calling the mixin parsing an argument of 'large', what this means is the styles within this @include will be applied to the webpage when the screen
                width is between between 992px and 1259px.
            </p>

            <p>It doesn't just need to be 'large' that is parsed into the mixin, you have a choice of 'small' 'smedium', 'medium' 'large' and 'x-large'. If you enter a string that isn't one of
                these options, the @error will run displaying an error, which can be seen in the first code snippet.
            </p>
            <br>
            <hr>
            </div>
            
        </div>

        <div class="container__center ishidden__section">
            <div class="section-title">
                <h2 class="h1 text-center">JavaScript</h2>
                <button class="toggle-section "><svg class="icon icon-chevron-circle-right"><use xlink:href="#icon-chevron-circle-right"></use></svg></use></svg></button> 
                
            </div>
            <div class="section-content">
                <h3>Below you can find a code snippet used on this very portfolio:</h3>
                <div class="container__code">
                <pre>
                    <code class="language-javascript">
// Section Toggle
const triangle = document.getElementsByClassName("toggle-section");
const rotate = document.getElementsByClassName("rotate");
const sectionContent = document.getElementsByClassName("section-content");

for (let i = 0; i < triangle.length; i++)
{
    sectionContent[i].style.display = "block";
    
    triangle[i].addEventListener("click", function () {
        
        this.classList.toggle("rotate");

        if (sectionContent[i].style.display === "block")
        {
            sectionContent[i].style.display = "none";
        }
        else
        {
            sectionContent[i].style.display = "block";
        }

    });
}
                    </code>
                </pre>

            </div>

            <p> This JavaScript code is used for the toggle buttons you can find scattered across this website. It is used to allow users to expand or collapse sections of content
                once they click on the button (it will alternate between expanding or collapsing the corrosponding content with each button click).
            </p>

            <p> This is useful for users when they are reading a long wordy webpage and may lose track of where they are. Once they have finished reading a section of content,
                they can simply hide that section so they don't have to interact with it again unless they choose to do so. 
            </p>

            <h3>Below you can find an in-depth explination of each section of code listed in the code snippet above:</h3>

            <div class="container__code">
                <pre>
                    <code class="language-javascript">
const triangle = document.getElementsByClassName("toggle-section");
const rotate = document.getElementsByClassName("rotate");
const sectionContent = document.getElementsByClassName("section-content");
                    </code>
                </pre>
            </div>

            <p>To start with, we must locate the class names associated with the button and the section of content we want to display or hide and store
                them in variables named "triangle", "rotate", and "sectionContent". The rotate class is no-where to be found
                on the webpage itself, but is useful here as it provides the necessary CSS properties to rotate the button icon on button press.
            </p>


            <div class="container__code">
                <pre>
                    <code class="language-javascript">
for (let i = 0; i < triangle.length; i++)
{
    sectionContent[i].style.display = "block";
    ...
                    </code>
                </pre>
            </div>

            <p>Next, we start a for loop to loop through all the buttons found within the triangle variable. Whilst looping through all these buttons, we set the
                display value of the corrosponding sectionContent variable to "block". This means that on page load, all sections of content will be displayed.
            </p>

            <div class="container__code">
                <pre>
                    <code class="language-javascript">
    triangle[i].addEventListener("click", function () {
            
        this.classList.toggle("rotate");
        ...
                    </code>
                </pre>
            </div>

            <p>Now, within the for loop we also add an event listener to every button contained within the triangle variable. In this case it means that whenever
                the triangle variable is pressed on the webpage, something happens. To start with, we toggle the class named "rotate" on and off with every button press, which as mentioned earlier,
                will add the CSS properties to the buttons, making them rotate once they are clicked on.
            </p>

            <div class="container__code">
                <pre>
                    <code class="language-javascript">
        if (sectionContent[i].style.display === "block")
        {
            sectionContent[i].style.display = "none";
        }
        else
        {
            sectionContent[i].style.display = "block";
        }

    });
}
                    </code>
                </pre>
            </div>

            <p>Finally, within the event listener we also add an if statement which checks to see if the section of content that corrosponds with the button pressed is showing or not.
                If the content is showing, the next button press will hide the content. If the content is hidden, the next button press will show the content.
                Now all thats left is to close up the event listener and the for loop, as all the code required is now implemented.
            </p>
            <br>
            <hr>
            </div>
            
        </div>
        <div class="container__center ishidden__section">
            <div class="section-title">
                <h2 class="h1 text-center">JavaScript Arrays</h2>
                <button class="toggle-section "><svg class="icon icon-chevron-circle-right"><use xlink:href="#icon-chevron-circle-right"></use></svg></use></svg></button> 
                
            </div>
            <div class="section-content">
                <h3>Below you can find a code snippet used in my JavaScript Arrays project:</h3>
                <div class="container__code">
                <pre>
                    <code class="language-javascript">
function createUser(userEmail) {
    let user = {
        email: `${userEmail}`,
        images: [],
        
    };
    
    userArray.push(user);
}
                    </code>
                </pre>

            </div>

            <p> This JavaScript code is used to create an object that will be stored in an array called 'userArray'. The object contains two properties: email (which contains the email address the user submitted)
                and an image array which is initally empty, but will eventually contain the HTML required to view images the user has selected.
                This function is called once the user has submitted a valid email address using the
                email input text field and the corrosponding submit button.
            </p>

            <h3>Below you can find an example and detailed explination of where the array is used within the JavaScript code above:</h3>

            <div class="container__code">
                <pre>
                    <code class="language-javascript">
function addImage(emailText) {

    if (emailText.length === 0) 
    {
        alert("Error: No emails can be found"); 
    }
    else
    {
        for (let i = 0; i < userArray.length; i++)
        {
            if(userArray[i].email === emailText)
            {
                userArray[i].images.push(`&lt;li&gt;&lt;img src=${currentImgURL} alt='${currentImgDesc}' width=200 height=200&gt;&lt;/li&gt;`)
                
                fetchImage();
            }
        }
    }
    
}
                    </code>
                </pre>

            </div>

            <p>The code above is used to add an image to the image array within the 'userArray' where the corrosponding email address has been selected (through the argument 'emailText').
            </p>

            <div class="container__code">
                <pre>
                    <code class="language-javascript">

    if (emailText.length === 0) 
    {
        alert("Error: No emails can be found"); 
    }   
                    </code>
                </pre>

            </div>

            <p> The code above checks to see if the parsed in email address is empty, and if it is it throws an error telling the user that no emails can be found. This code should never be run
                because the button associated with this function is disabled when no email address is selected. This is here as a double security measure.
            </p>

            <div class="container__code">
                <pre>
                    <code class="language-javascript">

    else
    {
        for (let i = 0; i < userArray.length; i++)
        {
            ...
        }
    } 
                    </code>
                </pre>

            </div>

            <p> If the previous code does not equal 0, then this code will run. It contains a 'for' loop, which executes the lines of code contained within multiple times until the condition provided
                is false (in this example the for loop will stop when the counter variable 'i' is greater than the 'userArray' length). The for loop essentially grabs all the elements contained within
                the 'userArray' array.
            </p>
            <div class="container__code">
                <pre>
                    <code class="language-javascript">

                          
            if(userArray[i].email === emailText)
            {
                userArray[i].images.push(`&lt;li&gt;&lt;img src=${currentImgURL} alt='${currentImgDesc}' width=200 height=200&gt;&lt;/li&gt;`)
                    
                fetchImage();
            }
                                
                            
                    </code>
                </pre>

            </div>

            

            <p>Contained within the for loop is an if statement which checks to see if any of the email properties within the 'userArray' array is exactly the same as any of the emails currently displayed
                in the dropdown menu. If they are, then some HTML code is added into the 'images[]' array of the selected email address in the dropdown. This HTML code will display the image from the
                image fetcher in a list. Finally, the function 'fetchImage()' is called, which refreshes the image fetcher with a new image.
            </p>
            <div class="container__code">
                <pre>
                    <code class="language-javascript">
btnAddImage.addEventListener('click', function () { 
    addImage(currentEmailText.textContent);
    regenerateImages();
});         
                    </code>
                </pre>

            </div>

            <p>The code above instructs the button labled 'Add Current Image' to execute two functions on click: 'addImage()' and 'regenerateImages()'. The 'addImage()' function parses the current text
                contained within the HTML element that displays the current email address selected within the dropdown, whilst also executing all the code mentioned earlier. The 'regenerateImages()' function,
                in short, will display all the currently saved images linked to an email address on the webpage (if there are any).
            </p>
            <br>
            <hr>
            </div>
            
        </div>
        <div class="container__center ishidden__section">
            <div class="section-title">
                <h2 class="h1 text-center">PHP</h2>
                <button class="toggle-section "><svg class="icon icon-chevron-circle-right"><use xlink:href="#icon-chevron-circle-right"></use></svg></use></svg></button> 
                
            </div>
            <div class="section-content">
                <h3>Below you can find a code snippet used in my Netmatters Contact Us page:</h3>
                <div class="container__code">
                <pre>
                    <code class="language-php">
                        
function postData($name, $email, $companyName, $telephone, $message, $marketing)
{
    include("dbConnection.php");

    try {
        $sql = $conn->prepare('
            INSERT INTO enquiries (name, email, company_name, telephone, message, marketing)
            VALUES (:name, :email, :company_name, :telephone, :message, :marketing);
        ');

        $sql->bindValue(":name", $name, PDO::PARAM_STR);
        $sql->bindValue(":email", $email, PDO::PARAM_STR);
        $sql->bindValue(":company_name", $companyName, PDO::PARAM_STR);
        $sql->bindValue(":telephone", $telephone, PDO::PARAM_STR);
        $sql->bindValue(":message", $message, PDO::PARAM_STR);
        $sql->bindValue(":marketing", $marketing, PDO::PARAM_STR);


        $sql->execute();
        return true;
    }
    catch (PDOException $pe)
    {
        echo 'Unable to send data ' . $pe->getMessage();
        exit;
    }
}
                    </code>
                </pre>

            </div>

            <p> This PHP code is used to send the data that a user enters on the enquiry section of the 'Contact Us' page. The function 'postData' is called in another file which will contain
                all the text that a user has inputted within the required text fields.
            </p>

            <h3>Below you can find a detailed explination of how the PHP code above, split into sections:</h3>

            <div class="container__code">
                <pre>
                    <code class="language-php">
function postData($name, $email, $companyName, $telephone, $message, $marketing)
{
    include("dbConnection.php");
    ...
                    </code>
                </pre>

            </div>

            <p>The code above is simply calling another PHP file named 'dbConnection.php'. Within this file contains the necessary code to establish a link between the website and the database.
                It is needed here to execute the code that comes after this.
            </p>

            <div class="container__code">
                <pre>
                    <code class="language-php">
    try {
            $sql = $conn->prepare('
                INSERT INTO enquiries (name, email, company_name, telephone, message, marketing)
                VALUES (:name, :email, :company_name, :telephone, :message, :marketing);
            ');
            ...
                    </code>
                </pre>

            </div>

            <p> The code above is preparing what is called an SQL (Server Query Language) statement. In this case the statement is inserting the values
                ':name' ':email' ':company_name' ':telephone' ':message' and ':marketing' into the corrosponding table columns within the database. You will notice
                that this SQL statement is contained within a 'try' block, which attempts to execute the code within the block, and if it can't, the code created
                in the 'catch' block (which you can see later on) will run.
            </p>

            <div class="container__code">
                <pre>
                    <code class="language-php">

            $sql->bindValue(":name", $name, PDO::PARAM_STR);
            $sql->bindValue(":email", $email, PDO::PARAM_STR);
            $sql->bindValue(":company_name", $companyName, PDO::PARAM_STR);
            $sql->bindValue(":telephone", $telephone, PDO::PARAM_STR);
            $sql->bindValue(":message", $message, PDO::PARAM_STR);
            $sql->bindValue(":marketing", $marketing, PDO::PARAM_STR);
            ...
                    </code>
                </pre>

            </div>

            <p> The code above is placing the variables '$name', '$email', '$companyName', '$telephone', '$message' and '$marketing' into the values that you can see from the previous block of code.
                These variables are passed into the function from earlier when it has been called elsewhere. All of the variables listed are also set as a PDO (PHP Data Objects) strings to the database.
            </p>
            <div class="container__code">
                <pre>
                    <code class="language-php">    
            $sql->execute();
            return true;
        }
        ...    
                    </code>
                </pre>

            </div>

            

            <p>Finally within the try block, the SQL statement is executed to the database and the value true is returned.
            </p>
            <div class="container__code">
                <pre>
                    <code class="language-php">
    catch (PDOException $pe)
    {
        echo 'Unable to send data ' . $pe->getMessage();
        exit;
    }
}     
                    </code>
                </pre>

            </div>

            <p>Lastly the catch block mentioned earlier can be found. This block of code will run if the connection established fails or if the SQL statement created earlier
                has an error. Within the catch block, a message will run on the webpage telling the user that it was unable to sent the data and the reason why via the '$pe->getMessage()',
                which is a pre-defined function from the class PDOException, seen on the catch line of code. Finally, the program will come to a halt on the exit line of code 
                (so no code after this line being executed can be run).
            </p>
            <br>
            
            </div>
            <br>
            <hr>
        </div>

        <?php include ("php/footer.php"); ?>
    </div>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/navMenuToggle.js"></script>
    <script src="js/sectionToggle.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/go.min.js"></script>
    <script>hljs.highlightAll();</script>
    
</body>
</html>