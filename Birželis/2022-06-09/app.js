const btn = document.querySelector('button');

if (btn) {
    btn.addEventListener("click", function(event) {
        console.log('anonymus function',this,event);
    });
    btn.addEventListener("click", (event) => {
        console.log('anonymus arrow function',this,event);
    });

    function clickEventHandler(event) {
        console.log('clickEventHandler',this,event);
    }

    btn.addEventListener('click', clickEventHandler);

    const clickEventHandlerAsVariable = function(event) {
        console.log('clickEventHandlerAsVariable',this,event);
    }

    btn.addEventListener('click', clickEventHandlerAsVariable);
}

// ?. veikia kaip if salyga