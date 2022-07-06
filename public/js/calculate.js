let operates = new Array();

function getNum(){

    document.addEventListener('click',(e) => {
        const target = e.target;
        if (!target.closest('.js__calc__num')) return;

        let get_num = target.closest('.js__calc__num');
        let text_ans = document.querySelector('.js__calc_ans');


        if(operates.length === 0 || operates.length%2 === 0){
            operates.push(parseInt(get_num.dataset.num));
        }else if(operates.length%2 === 1){
            operates[operates.length-1] = parseInt(operates[operates.length-1]+get_num.dataset.num)
        }

        text_ans.textContent = operates[operates.length-1]
        console.log(operates);
    })
}

function calcProcess(){

    // document.querySelector('.js__calc__percent').addEventListener('click', (e)=>{
    //     calc = 1;
    //     showAns();
    //     console.log()
    // })

    document.querySelector('.js__calc_ce').addEventListener('click', (e)=>{
        if(operates.length != 0 || operates.length%2 === 1){
            operates.pop();
        }
    })

    document.querySelector('.js__calc_c').addEventListener('click', (e)=>{
        operates = [];
        document.querySelector('.js__calc_ans').textContent = 0;
    })

    document.querySelector('.js__calc__plus__minus').addEventListener('click', (e)=>{
        console.log("&#43;&#8725;&#8722;");
        if(operates.length != 0 || operates.length%2 === 1){
            console.log("Came",operates[operates.length-1]);
            document.querySelector('.js__calc_ans').textContent = (-1)*operates[operates.length-1]
            operates[operates.length-1] = (-1)*operates[operates.length-1]
        }
    })

    document.querySelector('.js__calc__one__div').addEventListener('click', (e)=>{
        if(operates.length != 0 || operates.length%2 === 1){
            console.log("Came",operates[operates.length-1]);
            document.querySelector('.js__calc_ans').textContent = 1/operates[operates.length-1]
            operates[operates.length-1] = 1/operates[operates.length-1]
        }
    })

    document.querySelector('.js__calc__deg').addEventListener('click', (e)=>{
        if(operates.length != 0 || operates.length%2 === 1){
            console.log("Came",operates[operates.length-1]);
            document.querySelector('.js__calc_ans').textContent = operates[operates.length-1]*operates[operates.length-1]
            operates[operates.length-1] = operates[operates.length-1]*operates[operates.length-1]
        }
    })

    document.querySelector('.js__calc__root').addEventListener('click', (e)=>{
        if(operates.length != 0 || operates.length%2 === 1){
            console.log("Came",operates[operates.length-1]);
            document.querySelector('.js__calc_ans').textContent = Math.sqrt(operates[operates.length-1]);
            operates[operates.length-1] = Math.sqrt(operates[operates.length-1]);
        }
    })

    document.querySelector('.js__calc__div').addEventListener('click', (e)=>{
        console.log("Division");
        calc = '/';
        operates.push('/')
    })

    document.querySelector('.js__calc__mul').addEventListener('click', (e)=>{
        console.log("Multipulation");
        calc = '*';
        operates.push('*')
    })

    document.querySelector('.js__calc__sub').addEventListener('click', (e)=>{
        console.log("Subtraction");
        calc = '-';
        operates.push('-')
    })

    document.querySelector('.js__calc__add').addEventListener('click', (e)=>{
        console.log("Addition");
        calc = '+';
        operates.push('+')
    })

    document.querySelector('.js__calc__comma').addEventListener('click', (e)=>{
        console.log(",");
        calc = ',';
        // operate.push('/')
    })

    document.querySelector('.js__calc__equal').addEventListener('click', (e)=>{
        calculate()
    })

}

function calculate(){


    let ans = 0;
    operates.forEach((operate,index) => {
        // if(index === 0){
        //     ans = operate;
        // }
        //
        // if(operate === '*'){
        //     ans = ans * operates[index+1];
        //     console.log(operates[index+1]);
        // }else if(operate === '/'){
        //     ans = ans / operates[index+1];
        // }

        if(operate === '*'){
            ans = operates[index-1] * operates[index+1]
            operates.splice(index-1,2);
            operates[index-1] = ans;
        }else if(operate === '/'){
            ans = operates[index-1] / operates[index+1]
            operates.splice(index-1,2);
            operates[index-1] = ans;
        }

    })

    // for (let i=0; i<operates.length; i++){
    //     if(operates[i] === '*'){
    //         ans = operates[i-1] * operates[i+1]
    //         operates.splice(i-1,2);
    //         operates[i-1] = ans;
    //         console.log(i);
    //     }else if(operates[i] === '/'){
    //         ans = operates[i-1] / operates[i+1]
    //         operates.splice(i-1,1);
    //         operates[i-1] = ans;
    //     }
    //     console.log(operates);
    // }


    console.log(operates);
    operates.forEach((operate,index) => {

        // console.log(index);
        if(index === 0){
            ans = operate;
        }

        if(operate === '+'){
            ans += operates[index+1];
        }else if(operate === '-'){
            ans -= operates[index+1];
        }

        // if(operate === '+'){
        //     ans = operates[index-1] + operates[index+1]
        //     operates.splice(index-1,2);
        //     operates[index-1] = ans;
        //     console.log(operates,ans);
        // }else if(operate === '-'){
        //     ans = operates[index-1] - operates[index+1]
        //     operates.splice(index-1,2);
        //     operates[index-1] = ans;
        // }

    })
    console.log(ans);


    let ans_text = document.querySelector('.js__calc_ans');
    ans_text.textContent = ans;

}

function showText(){
    let text = '';
    operates.forEach((operate, index)=>{
        text +=operate;
    });
}


document.addEventListener("DOMContentLoaded", function () {
    getNum()
    calcProcess()


    let arr = [1,2,3,'4','dfs','ff','ss',25,'test','dd',45,56];

});
