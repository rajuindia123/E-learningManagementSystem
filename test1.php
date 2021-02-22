<div class="item-title"><button>Title here</button></div>
<div class="item-content">
    <div class="item-body"><video controls id="video">
                    <source src="upload/videoplayback.mp4" type="video/mp4" />
                </video></div>
</div>
<div class="item-title"><button>Title here</button></div>
<div class="item-content">
    <div class="item-body"><video controls id="video">
                    <source src="upload/videoplayback.mp4" type="video/mp4" />
                </video></div>
</div>
<div class="item-title"><button>Title here</button></div>
<div class="item-content">
    <div class="item-body"><video controls id="video">
                    <source src="upload/videoplayback.mp4" type="video/mp4" />
                </video></div>
</div>
<script src="js/jquery.js"></script>
<script>
$(document).ready(function () {
    //Initially hide all the item-content
    $('.item-content').hide();
    
    // Attach a click event to item-title
    $('.item-title').on('click', function () {
        //Find the next element having class item-content
        $(this).next('.item-content').toggle();
    });
});
 </script>