<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
  font-size: 17px;
}

.banner {
    width: 100%; 
    height: 100vh;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    
    margin-bottom: 0%;
    
  
}
    .banner video{
        position: absolute;
        top: 0;
        left: 0;
        object-fit: cover;
        width: 100%;
        height: 100%;
        pointer-events: none;
    }

.banner .content {
  position: relative;
    margin-top: -20%;
   background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0, 0.1);
    border-radius: 20px;
   color: #fff;
  max-width:  1000px;
  
   z-index: 1;
    text-align: center;
}

#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #fff;
  color: #000;
  cursor: pointer;
}

#myBtn:hover {
  background: #000;
  color: #fff;
}
</style>
<div class="banner">
<video autoplay muted loop id="myVideo">
  <source src="Keyboard.mp4" type="video/mp4">
 
</video>
    <div class="content">
        <h1>What is E Learning?
</h1>
  <p>E Learning is learning utilizing electronic technologies to access educational curriculum outside of a traditional classroom.  In most cases, it refers to a course, program or degree delivered completely online.</p>
    <p>A learning system based on formalised teaching but with the help of electronic resources is known as E-learning. While teaching can be based in or out of the classrooms, the use of computers and the Internet forms the major component of E-learning. E-learning can also be termed as a network enabled transfer of skills and knowledge, and the delivery of education is made to a large number of recipients at the same or different times. Earlier, it was not accepted wholeheartedly as it was assumed that this system lacked the human element required in learning.</p>
  <button id="myBtn" onclick="myFunction()">Pause</button>
    
    
    
    </div>
</div>
    
    
    <script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>

