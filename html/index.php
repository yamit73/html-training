<!DOCTYPE html> <!-- tell us that this is a html document-->
<html> <!--it is the root element of the html page-->
    <head><!--basically it contains the meta information about the page like title,seo keyword etc-->
        <title>Hello World</title> <!--used to define the title of the page-->
    <style>
        #info-form{
            width: 300px;
            height: 250px;
            border: blueviolet solid 1px;
            padding-left: 6%;
            margin-left: auto;
            margin-right: auto;
        }
        .lable{
            font-size: 17px;
            color: rgb(12, 151, 244);
            font-weight: bold;
            margin-bottom: 10px;
        }
        .inp{
            width: 70%;
            height: 25px;
            padding-left: 10px;
            border-color: turquoise;
        }
        .sub-btn{
            background-color: rgb(35, 151, 155);
            width: 50%;
            height:25px;
            font-weight: bold;
            font-size: 15px;
        }
        table,th,tr,td{
            border: 1px #369 solid;
            border-collapse:collapse;
            padding:10px;
        }
        .table-container{
            width:fit-content
        }
    </style>

    </head>
    <body> <!--this is the container that content will be visible on the page-->
        <div id="main-container">
        <h1 style="text-align:center;" title="simple heading">Hello World</h1>
        <img style="margin-left:39%;border: solid 2px blueviolet; border-radius:50%" src="img1.jpeg"title="jsut some random image" alt="just some random image" width="300px"height="300px">
        <br>
        <a href="https://www.w3schools.com/" title="w3school" style="">a link to another page</a><br><br>
        <hr>
        <h3>Some quatation</h3>
        <blockquote>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, est? Totam sit debitis laudantium nostrum! Sequi itaque, id, hic tenetur eius rerum quas, earum cumque odit vitae recusandae. Nostrum, hic.
            Recusandae numquam harum laborum distinctio molestias, doloribus vero provident ratione suscipit architecto pariatur iure voluptates laboriosam quod iusto perferendis quas magnam voluptatum exercitationem odit ipsam repellendus quisquam accusamus corrupti? Quia?
        </blockquote>
        <hr>
        <div id="info-form">
        <form>
            <lable class="lable">your Name</lable><br>
            <input type="text"placeholder="Enter your name.." class="inp"><br><br>
            <lable class="lable">Email</lable><br>
            <input type="email"placeholder="Enter your email.."class="inp"><br><br>
            <lable class="lable">Password</lable><br>
            <input type="password"placeholder="Enter your password.."class="inp"><br><br>
            <button class="sub-btn">Submit</button>
        </form>
    </div>
    <hr>
    <div id="table-container">
        <table>
            <caption>Details</caption>
            <tr>
                <th>Name</th>
                <th>email</th>
                <th>Mobile</th>
                <th>Address</th>
            </tr>
            <tr>
                <td>Amit</td>
                <td>xyz@gmail.com</td>
                <td>123952356</td>
                <td>kjhakuifuif</td>
            </tr>
            <tr>
                <td>Sankalp</td>
                <td>xyz@gmail.com</td>
                <td>123952356</td>
                <td>hiiiiii</td>
            </tr>
            <tr>
                <td>Yash</td>
                <td>xyz@gmail.com</td>
                <td>123952356</td>
                <td>kjhakuifuif</td>
            </tr>
            <tr>
                <td>Hello</td>
                <td>xyz@gmail.com</td>
                <td>123952356</td>
                <td>kjhakuifuif</td>
            </tr>
            <tr>
                <td>world</td>
                <td>xyz@gmail.com</td>
                <td>123952356</td>
                <td>kjhakuifuif</td>
            </tr>
            <tr>
                <td>World</td>
                <td>xyz@gmail.com</td>
                <td>123952356</td>
                <td>kjhakuifuif</td>
            </tr>
        </table>
    </div>
    <div id="lists-container">
        <h3>Unordered list</h3>
        <ul type="disk">
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
            <li> Qui quidem vitae atque nemo corporis in tempore ve</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
            <li> Qui quidem vitae atque nemo corporis in tempore ve</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
            <li> Qui quidem vitae atque nemo corporis in tempore ve</li>
        </ul>
        <h3>Ordered list</h3>
        <ol type="A">
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
            <li> Qui quidem vitae atque nemo corporis in tempore ve</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
            <li> Qui quidem vitae atque nemo corporis in tempore ve</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
            <li> Qui quidem vitae atque nemo corporis in tempore ve</li>
        </ol>
        <h1>Hi</h1>
    </div>
    </div>
    </body>
</html>