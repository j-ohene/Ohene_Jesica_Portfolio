export function scrollTrigger(){

gsap.registerPlugin(ScrollTrigger);

    let tl = gsap.timeline({
        // yes, we can add it to an entire timeline!
        scrollTrigger: {
          trigger: ".front-end-background",
          pin: true, 
          start: "top top", 
          end: "+=75", //
          scrub: 1, // 
          snap: {
            snapTo: "labels", 
            duration: { min: 0.2, max: 3 },
            delay: 0, 
            ease: "power1.inOut", 
          },
        },
      });
      
      // add animations and labels to the timeline
      tl.addLabel("start")
        .from(".gear", { scale: 0.8, rotation: 180, autoAlpha: 0 })
        .addLabel("color")
        .from(".gear")
        .addLabel("spin")
        .to(".gear", { rotation: 360 })
        .addLabel("end");
      
  
        };
