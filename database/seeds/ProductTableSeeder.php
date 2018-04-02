<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://d2ueuvlup6lbue.cloudfront.net/attachments/49264d707a0167074b7f554ae40fed957725abd1/store/fitpad/260/364/1b3f9379d8a8b3abbe6abc9a35e5ceff884b362f37331943f001f5add8cf/64777.jpg',
            'title' => 'リメンバー・ミー',
            'description' => '主人公ミゲルは、音楽が大好きなギターの天才少年。しかし、過去の悲しい出来事がきっかけで彼の一族には「音楽禁止」の厳しい掟があり、ミゲルはギターを弾くどころか、家で音楽を聞くこともできない。特報では、家族に見つからないよう憧れのミュージシャンデラクルスを真似てこっそりギターを弾くミゲルのシーンからスタートする。ある日、家族から禁じられた音楽への夢を募らせるミゲルが、デラクルスの霊廟に飾られたギター…',
            'price' => '1000'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://d2ueuvlup6lbue.cloudfront.net/attachments/04c3306d2174dbceeaa7b227eb63d0669c8fc16b/store/fitpad/260/364/af19785ded26ad8b7b06479cb55c1a8a6ee2fb851d31fbe46ca425c7c630/%E3%83%9D%E3%82%B9%E3%82%BF%E3%83%BC.jpg',
            'title' => 'グレイテスト・ショーマン',
            'description' => '主人公のP.T.バーナムは＜ショービジネス＞の概念を生み出した男。誰もが“オンリーワンになれる場所”をエンターテインメントの世界に作り出し、人々の人生を勇気と希望で照らした実在の人物だ。そんなバーナムを支えたのは、どんな時も彼の味方であり続けた幼なじみの妻チャリティ。彼女の愛を心の糧に、仲間たちの友情を原動力に、バ ーナムはショーの成功に向かって、ひたむきに歩む。',
            'price' => '1500'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://d2ueuvlup6lbue.cloudfront.net/attachments/6766770640d330e42349e371f3fdda0980d8e883/store/fitpad/260/364/b6ce29c8bef7285ae38b93c9d949aff3546936e1b8f840d282d5d538a140/73733.jpg',
            'title' => 'トレイン・ミッション',
            'description' => '10年間勤めてきた保険会社を、60歳で突如リストラされたマイケル。いつもの通勤電車で帰路につき、常連客に挨拶しながらも、頭の中は住宅ローンと息子の学費のことでいっぱいだ。そんな彼の前に見知らぬ女が座り、「乗客の中から、ある重要な荷物を持った人物を捜して欲しい」と持ちかける。ヒントは3つ。常連客ではなく、終着駅で降りる、プリンと名乗る乗客。高額な報酬に抗えず、元警官の経験を生かし捜し始めるが、次から次へと襲いくる罠、深まる謎、さらには、妻と息子が人質に取られたことを知る。やがて、プリンが国家をも揺るがす重大事件の目撃者であることを突き止め、ようやく６人にまで絞り込んだ時、巧妙に仕組まれていた恐るべき陰謀が明かされる。',
            'price' => '500'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://d2ueuvlup6lbue.cloudfront.net/attachments/4f4fbb741d25a99e7de31f9df6369b5fd7e566ce/store/fitpad/260/364/b066fbe1f40d97614b9c1f7dd3c9a185a50ecf95ff3602ad888775ddd372/63759.png',
            'title' => 'ジュマンジ／ウェルカム・トゥ・ジャングル',
            'description' => '学校の地下室で居残りをさせられていた高校生4人。「ジュマンジ」という名前のソフトが入った古いビデオゲーム機を偶然にも発見する。プレイするキャラクターを選択した途端、4人はそれぞれのキャラクターの体＝アバターとなってゲームの中の世界に入り込んでしまったぁぁぁぁ。しかも、そこはジャングル！しかも、現実世界の自分とは性格も体格も性別までも違う自分にボディ・スイッチングしてしまう！このゲームを攻略しなければ、永遠にゲームの中に閉じ込められる。果たして彼らは、生きて現実世界に帰ることができるのか～！',
            'price' => '2000'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://d2ueuvlup6lbue.cloudfront.net/attachments/8a4736721c5afd3e2758417c36d54d5a3e400307/store/fitpad/260/364/9b616c83d28cb4bfc10663103a5b592dabddb8461029e13f68da4e89ad50/62567_%E6%9C%AC%E3%83%9D%E3%82%B9%E3%82%BF%E3%83%BC.JPG',
            'title' => 'ヴァレリアン 千の惑星の救世主',
            'description' => '西暦2740年。連邦捜査官のヴァレリアン（デイン・デハーン）とローレリーヌ（カーラ・デルヴィーニュ）は宇宙の平和を守る任務に就き、銀河をパトロールして回っている。ふたりは“アルファ宇宙ステーション”へと向かう。そこは長い年月を経て拡張を続け、あらゆる種族が共存する“千の惑星の都市”として銀河にその名を知られていた。しかし、その深部には邪悪な陰謀と、宇宙の歴史から抹殺されようとしていた“秘密”があった……。果たしてヴァレリアンとローレリーヌは“千の惑星の都市”と銀河の危機を救うことができるのか―！？',
            'price' => '10000'
        ]);
        $product->save();
    }
}
