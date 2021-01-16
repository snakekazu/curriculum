function createJuice(fruites){
  console.log(fruites + 'を受け取りました。ジュースにして返します');
  return fruites +'ジュース';
}
let orangejuice =createJuice('みかん');
console.log(orangejuice+'が届きました');