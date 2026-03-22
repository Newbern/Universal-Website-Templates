// First Active Facebook Post
// Setting Post 
let max_limit = 10

let left_side = -2
let left = -1
let center = 0
let right = 1
let right_side = 2


update()

        


function update(post) {
    // Deactivating & Resizing All Post  & Deleting Function
    Array.from(document.getElementsByClassName('facebook-post')).forEach(value => {
        value.classList.add('deactive'); 
        value.classList.remove('active')
        value.classList.remove('shrink')
        value.onclick = null
    });

    // Checking if Post Exists
    if (post === right && center < max_limit){
        left_side ++
        left ++
        center ++
        right ++
        right_side ++
    
    }
    

    if (post === left && center > 0){
        left_side --
        left --
        center --
        right --
        right_side --
    
        
        
    }
    

    // Setting Click Functions
    let check_click = document.getElementById('post-' + String(left));
    // Shrinking Side Posts
    let check_shrink = document.getElementById('post-' + String(left_side));

    // Checking Right Side Posts
    if (check_click){
        check_click.onclick = Previous
    }

    if (check_shrink){
        check_shrink.classList.add('shrink')
    }
    
    // Setting Click Functions
    check_click = document.getElementById('post-' + String(right));
    // Shrinking Side Posts
    check_shrink = document.getElementById('post-' + String(right_side));

    // Checking Right Side Posts
    if (check_click){
        check_click.onclick = Next
    }
    if (check_shrink){
        check_shrink.classList.add('shrink')
    }
            



    // Activating Post [left_side, left, center, right, right_side]
    [left_side, left, center, right, right_side].forEach(value => {
        const fail = document.getElementById(`post-${value}`); 
        if (fail) {
            fail.classList.remove('deactive');
        }
    });

    // In-Large Center Post
    document.getElementById('post-' + String(center)).classList.add('active');
    checking();

    // Starting Function
    if (post === "Start"){
        // Start up
        // Setting Click Functions
        document.getElementById('post-' + String(right)).onclick = Next
        document.getElementById('post-' + String(left)).onclick = Previous
        // Shrinking Side Posts
        document.getElementById('post-' + String(right_side)).classList.add('shrink')
        document.getElementById('post-' + String(left_side)).classList.add('shrink')
    }
} 


function Next(){
    
    update(right)
    
}


function Previous(){
    
    update(left)
}

function checking() {
    let filler_left = document.getElementById('filler-left');
    let filler_left_side = document.getElementById('filler-left-side');
    let filler_right = document.getElementById('filler-right');
    let filler_right_side = document.getElementById('filler-right-side');

    filler_left.style.display = 'none'
    filler_left_side.style.display = 'none'
    filler_right.style.display = 'none'
    filler_right_side.style.display = 'none'

    // Adding fillers to the left posts
    if (center <= 1) {

        if (center === 1) {
            filler_left.classList.add('facebook-post', 'shrink')
            filler_left.style.display = 'flex'
        }
        else {
            filler_left.classList.remove('shrink')
        }
        
        if (center === 0){
            filler_left.style.display = 'flex';
            filler_left_side.style.display = 'flex';
            filler_left_side.classList.add('facebook-post', 'shrink')
        }
    }

    // Adding fillers to the right posts
    if (center >= max_limit - 2) {
        if (center === max_limit - 2) {
            filler_right.classList.add('facebook-post', 'shrink')
            filler_right.style.display = 'flex'
        }
        else {
            filler_right.classList.remove('shrink')
        }
        if (center === max_limit - 1) {
            filler_right.style.display = 'flex';
            filler_right_side.style.display = 'flex';
            filler_right_side.classList.add('facebook-post', 'shrink')
        }
    }
    

}

