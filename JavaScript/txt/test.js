let arr = [1,2,3,4,5];
arr.push(6);
delete arr[5];
arr.splice(2,1);
arr.splice(2,1,3);
arr.splice(3,0,4);
arr.splice(0,0,0);
arr.splice(arr.length,0,arr.length);
arr.splice(2,30,31,32,33);
arr.push(31);

let str = 'abcdefg';

let ex_name = "javascript.log.php";

let a = ex_name.slice(0,ex_name.indexOf('.'));
let b = ex_name.slice(ex_name.indexOf('.')+1, ex_name.lastIndexOf('.'));
let c = ex_name.slice(ex_name.lastIndexOf('.')+1);

console.log(a + b + c);

let arr_1 = [1,2,3];
let arr_2 = [10,20,30];
let arr_3 = [100,200,300];
let arr_123 = arr_1.concat(arr_2,arr_3);

let sort_arr = [6,3,5,1,9,100];

num = 1;
do{
    console.log("2 * " + num + " = " + 2 * num);
    num++;
}while(num <= 9);

for( let i in arr ){
    console.log(i + " : " + arr[i]);
};

console.log(arr);
arr.push(21);
for( let z of arr ){
    console.log(z);
}