class Taiyaki{
  constructor(guzai){
    this.guzai=guzai;
  }
  nakami(){
    console.log(`中身は${this.guzai}です`)
  }
}
let anko =new Taiyaki('あんこ');
anko.nakami();
let cream =new Taiyaki('クリーム');
cream.nakami();
let cheese=new Taiyaki('チーズ');
cheese.nakami();