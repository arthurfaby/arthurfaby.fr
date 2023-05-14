const navSlide = ()=> {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.navlinks');
    const navLinks = document.querySelectorAll('.navlinks li');

    burger.addEventListener('click',()=>{
        nav.classList.toggle('navactive');
        

        navLinks.forEach((link,index)=>{
            
            if(link.style.animation){
                link.style.animation = '';

            } else{
                link.style.animation = 'navLinkFade 0.5s ease forwards ' + (index/5+0.4) +  's';
            }
        });

        burger.classList.toggle('toggle');

    });
}

navSlide();

$(function(){
    $('.navlinks a, footer a, .godown a').on("click", function(event){
        var hash = this.hash;

        $('body,html').animate({scrollTop: $(hash).offset().top - 100}, 1000, function(){window.location.hash = hash;})
    });
});


$.fn.isInViewport = function() {
    var elementTop = $(this).offset().top + 400;
    var elementBottom = elementTop-800 + $(this).outerHeight();
  
    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();
  
    return elementBottom > viewportTop && elementTop < viewportBottom;
  };

  const about = document.getElementById("about-me-a");
  const education = document.getElementById("education-a");
  const skills = document.getElementById("skills-a");
  const exp = document.getElementById("exp-a");
  const projects = document.getElementById("projects-a");
  const activities = document.getElementById("activities-a");
  const contact = document.getElementById("contact-me-a");
  if($("#about-me").isInViewport()){
      about.classList.remove("unactivea");
      about.classList.add("activea");
      
  }    
  else{
      about.classList.remove("activea");
      about.classList.add("unactivea");
  }
  if($("#education").isInViewport()){
      education.classList.remove("unactivea");
      education.classList.add("activea");
      
  }    
  else{
      education.classList.remove("activea");
      education.classList.add("unactivea");
  }
  if($("#skills").isInViewport()){
      skills.classList.remove("unactivea");
      skills.classList.add("activea");
      
  }    
  else{
      skills.classList.remove("activea");
      skills.classList.add("unactivea");
  }
  if($("#exp").isInViewport()){
      exp.classList.remove("unactivea");
      exp.classList.add("activea");
      
  }    
  else{
      exp.classList.remove("activea");
      exp.classList.add("unactivea");
  }
  if($("#projects").isInViewport()){
      projects.classList.remove("unactivea");
      projects.classList.add("activea");
      
  }    
  else{
      projects.classList.remove("activea");
      projects.classList.add("unactivea");
  }
  if($("#activities").isInViewport()){
      activities.classList.remove("unactivea");
      activities.classList.add("activea");
      
  }    
  else{
      activities.classList.remove("activea");
      activities.classList.add("unactivea");
  }
  if($("#contact-me").isInViewport()){
      contact.classList.remove("unactivea");
      contact.classList.add("activea");
      
  }    
  else{
      contact.classList.remove("activea");
      contact.classList.add("unactivea");
  }

$(function(){
    $(window).scroll(function(){
        const about = document.getElementById("about-me-a");
        const education = document.getElementById("education-a");
        const skills = document.getElementById("skills-a");
        const exp = document.getElementById("exp-a");
        const projects = document.getElementById("projects-a");
        const activities = document.getElementById("activities-a");
        const contact = document.getElementById("contact-me-a");
        if($("#about-me").isInViewport()){
            about.classList.remove("unactivea");
            about.classList.add("activea");
            
        }    
        else{
            about.classList.remove("activea");
            about.classList.add("unactivea");
        }
        if($("#education").isInViewport()){
            education.classList.remove("unactivea");
            education.classList.add("activea");
            
        }    
        else{
            education.classList.remove("activea");
            education.classList.add("unactivea");
        }
        if($("#skills").isInViewport()){
            skills.classList.remove("unactivea");
            skills.classList.add("activea");
            
        }    
        else{
            skills.classList.remove("activea");
            skills.classList.add("unactivea");
        }
        if($("#exp").isInViewport()){
            exp.classList.remove("unactivea");
            exp.classList.add("activea");
            
        }    
        else{
            exp.classList.remove("activea");
            exp.classList.add("unactivea");
        }
        if($("#projects").isInViewport()){
            projects.classList.remove("unactivea");
            projects.classList.add("activea");
            
        }    
        else{
            projects.classList.remove("activea");
            projects.classList.add("unactivea");
        }
        if($("#activities").isInViewport()){
            activities.classList.remove("unactivea");
            activities.classList.add("activea");
            
        }    
        else{
            activities.classList.remove("activea");
            activities.classList.add("unactivea");
        }
        if($("#contact-me").isInViewport()){
            contact.classList.remove("unactivea");
            contact.classList.add("activea");
            
        }    
        else{
            contact.classList.remove("activea");
            contact.classList.add("unactivea");
        }
    });

});


$(function(){
    $(window).scroll(function(){
        if($('#skills').isInViewport()){
            document.getElementById('skill1').classList.remove('unvisible');
            document.getElementById('skill1').classList.add('first-skill');
        }
        if($('#skills').isInViewport()){
            document.getElementById('skill2').classList.remove('unvisible');
            document.getElementById('skill2').classList.add('first-skill');
        }
        if($('#skills').isInViewport()){
            document.getElementById('skill3').classList.remove('unvisible');
            document.getElementById('skill3').classList.add('first-skill');
        }
        if($('#skills').isInViewport()){
            document.getElementById('skill4').classList.remove('unvisible');
            document.getElementById('skill4').classList.add('first-skill');
        }
        if($('#skills').isInViewport()){
            document.getElementById('skill5').classList.remove('unvisible');
            document.getElementById('skill5').classList.add('first-skill');
        }
        if($('#skills').isInViewport()){
            document.getElementById('skill6').classList.remove('unvisible');
            document.getElementById('skill6').classList.add('first-skill');
        }
    });

});


