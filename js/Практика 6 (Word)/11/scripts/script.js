let str = '321123';
let sumFirst = 0;
let sumSecond = 0;

for (let i = 0; i < 3; i++) {
   sumFirst +=  +str[i];
};

for (let i = 3; i < 6; i++) {
   sumSecond +=  +str[i];
};

if (sumFirst === sumSecond) {
   console.log('yes');
} else {
   console.log('no');
};