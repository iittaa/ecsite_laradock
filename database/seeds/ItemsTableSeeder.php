<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("items")->delete();
        $item_seeds = [
            [
                'name' => 'ネスレ スターバックス ハウスブレンド ネスカフェ ドルチェ グスト専用カプセル',
                'amount' => '980',
            ],
            [
                'name' => 'キリン 午後の紅茶 おいしい無糖 2L PET×9本',
                'amount' => '1286',
            ],
            [
                'name' => '[トクホ]ヘルシア緑茶 1050ml×12本',
                'amount' => '5133',
            ],
            [
                'name' => 'アサヒ飲料 ウィルキンソン タンサン ティー 500ml×24本',
                'amount' => '2238',
            ],
            [
                'name' => 'アサヒ飲料 モンスター パイプラインパンチ 355ml×24本',
                'amount' => '4129',
            ],
            [
                'name' => 'コカ・コーラ ペットボトル 500ml×24本',
                'amount' => '2136',
            ],
            [
                'name' => 'レッドブル 185ml×24本',
                'amount' => '4070',
            ],
            [
                'name' => '有機コーディアル エルダーフラワー 500ml',
                'amount' => '1481',
            ],
            [
                'name' => 'コントレックス 1.5L×12本 [並行輸入品]',
                'amount' => '1640',
            ],
            [
                'name' => 'カルピス 守る働く乳酸菌 L-92 100ml×30本',
                'amount' => '3191',
            ],
            [
                'name' => 'VOX ヴォックス 強炭酸水 プレーン 500ml×24本',
                'amount' => '1650',
            ],
            [
                'name' => '小林製薬の濃い杜仲茶 (煮出し用) 3g×30袋',
                'amount' => '1137',
            ],
            [
                'name' => '【無糖】コカ・コーラ い・ろ・は・す 天然水にれもん 555mlPET×24本',
                'amount' => '2143',
            ],
            [
                'name' => 'C1000 ビタミンレモン 140ml×30本 ハウス ウェルネスフーズ',
                'amount' => '2570',
            ],
            [
                'name' => '[2CS] [トクホ] コカ・コーラ からだすこやか茶 W お茶 ペットボトル (350ml×24本)×2箱',
                'amount' => '6131',
            ],
            [
                'name' => '[トクホ] コカ・コーラ からだすこやか茶W お茶 ペットボトル 1.05L 12本',
                'amount' => '3761',
            ],
            [
                'name' => '[トクホ] コカ・コーラ からだすこやか茶W お茶 ペットボトル 350ml×24本',
                'amount' => '3066',
            ],
            [
                'name' => 'アサヒ ウィルキンソン タンサン 強炭酸水 500ml×24本',
                'amount' => '1806',
            ],
            [
                'name' => 'カゴメ 野菜一日 これ一本 200ml×24本',
                'amount' => '1689',
            ],
            [
                'name' => 'クリスタルガイザー 500ml×24本 [並行輸入品]',
                'amount' => '1258',
            ],
            [
                'name' => 'コカ・コーラ 綾鷹 お茶 ペットボトル 525ml×24本',
                'amount' => '1850',
            ],
            [
                'name' => '[炭酸水]サントリー 天然水 スパークリングレモン 500ml×24本',
                'amount' => '1808',
            ],
            [
                'name' => 'コカ・コーラ い・ろ・は・す 天然水 ペットボトル 555ml×24本',
                'amount' => '1772',
            ],
            [
                'name' => '伊藤園 1日分の野菜 (紙パック) 200ml×24本',
                'amount' => '1695',
            ],
            [
                'name' => 'アサヒ飲料 ウィルキンソン タンサン レモン 強炭酸水 500ml×24本',
                'amount' => '1807',
            ],
            [
                'name' => 'キリン 生茶 525mlPET×24本',
                'amount' => '1984',
            ],
            [
                'name' => 'ネスカフェ ゴールドブレンド エコ&システムパック 105g',
                'amount' => '693',
            ],
            [
                'name' => 'コカ・コーラ 爽健美茶 お茶 ペットボトル 600ml×24本',
                'amount' => '1967',
            ],
            [
                'name' => 'サンペレグリノ(S.PELLEGRINO) 炭酸入りナチュラルミネラルウォーター PET 500ml×24本[直輸入品]',
                'amount' => '1690',
            ],
            [
                'name' => 'チオビタドリンク 100ml×3B×10 [指定医薬部外品]',
                'amount' => '2830',
            ],
            [
                'name' => 'カゴメ トマトジュース 食塩無添加 200ml×24本[機能性表示食品]',
                'amount' => '1761',
            ],
            [
                'name' => 'マウントハーゲン オーガニック フェアトレード カフェインレスインスタントコーヒー100g',
                'amount' => '1125',
            ],
            [
                'name' => '伊藤園 磨かれて、澄みきった日本の水 島根 2L×8本',
                'amount' => '963',
            ],
            [
                'name' => 'アサヒ飲料 モンスター エナジー 355ml×24本',
                'amount' => '4020',
            ],
            [
                'name' => 'ゴメ トマトジュース食塩無添加 スマートPET 720ml×15本[機能性表示食品]',
                'amount' => '2352',
            ],
            [
                'name' => 'サントリー 天然水 南アルプス 550ml×24本 ナチュラルミネラルウォーター',
                'amount' => '2070',
            ],
            [
                'name' => 'キリン 生茶デカフェ 430mlPET×24本',
                'amount' => '1998',
            ],
            [
                'name' => 'ティーライフ ノンカフェイン ルイボスティー ティーバッグ 1袋',
                'amount' => '1000',
            ],
            [
                'name' => '[トクホ] サントリー 胡麻麦茶 350ml×24本',
                'amount' => '3359',
            ],
            [
                'name' => 'マルサン 有機豆乳無調整 1000ml×6本',
                'amount' => '1237',
            ],
            [
                'name' => 'キリン Volvic(ボルヴィック) PET (500ml×24本) [正規輸入品]',
                'amount' => '2062',
            ],
            [
                'name' => 'サントリー オールフリー [ ノンアルコール 350ml×24本 ]',
                'amount' => '2544',
            ],
            [
                'name' => '伊藤園 磨かれて、澄みきった日本の炭酸水500ml×24本',
                'amount' => '1617',
            ],
            [
                'name' => 'キリンのやわらか天然水 310ml×30本',
                'amount' => '1796',
            ],
            [
                'name' => 'ポッカサッポロ キレートレモン 155ml×24本',
                'amount' => '1597',
            ],
            [
                'name' => 'アサヒ飲料 三ツ矢サイダー 缶 250ml×30本',
                'amount' => '1278',
            ],
            [
                'name' => 'アサヒ飲料 十六茶 ラベルレスボトル 630ml×24本',
                'amount' => '2186',
            ],
            [
                'name' => 'アサヒ飲料 ウィルキンソン タンサン 強炭酸水 250ml×20本',
                'amount' => '1075',
            ],
            [
                'name' => '[トクホ]サントリー 伊右衛門 特茶 お茶 500ml×24本',
                'amount' => '3996',
            ],
            [
                'name' => 'サッポロ おいしい炭酸水 500ml×24本',
                'amount' => '1798',
            ],
            [
                'name' => '伊藤園 おーいお茶 緑茶 525ml×24本',
                'amount' => '2088',
            ],
            [
                'name' => 'ペリエ PET 500ml× 24本[直輸入品]',
                'amount' => '2328',
            ],
            [
                'name' => 'アサヒ ドライゼロ [ ノンアルコール 350ml×24本 ]',
                'amount' => '2544',
            ],
            [
                'name' => 'アサヒ飲料 おいしい水 六甲 600ml×24本',
                'amount' => '1978',
            ],
            [
                'name' => 'GREEN DAKARA やさしい麦茶 650ml×24本',
                'amount' => '2216',
            ],
            [
                'name' => '山本漢方製薬 大麦若葉粉末100% 徳用 3g*44包',
                'amount' => '980',
            ],
            [
                'name' => 'ポッカサッポロ 加賀棒ほうじ茶 525ml×24本',
                'amount' => '2093',
            ],
            [
                'name' => '伊藤園 健康ミネラルむぎ茶 600ml×24本',
                'amount' => '2189',
            ],
            [
                'name' => 'キリン 午後の紅茶 おいしい無糖 500mlPET×24本',
                'amount' => '2231',
            ],
            [
                'name' => 'アサヒ飲料 ウィルキンソン タンサン エクストラ 490ml×24本 [機能性表示食品]',
                'amount' => '2283',
            ],
            [
                'name' => 'カゴメ 野菜生活100 ベリーサラダ 200ml×24本',
                'amount' => '1731',
            ],
            [
                'name' => 'コカ・コーラ アクエリアス エアーボトル 500ml×24本',
                'amount' => '2010',
            ],
            [
                'name' => 'カゴメ 野菜生活100 Smoothie(スムージー) グリーンスムージーMix 330ml×12本',
                'amount' => '1761',
            ],
            [
                'name' => 'ネスカフェ エクセラ ボトルコーヒー 無糖 900ml×12本',
                'amount' => '1710',
            ],
            [
                'name' => '伊藤園 ビタミン野菜 (紙パック) 200ml×24本',
                'amount' => '1869',
            ],
            [
                'name' => 'サンペレグリノ(S.PELLEGRINO) 炭酸入りナチュラルミネラルウォーター PET 500ml×36本[直輸入品]',
                'amount' => '2426',
            ],
            [
                'name' => '[トクホ] [訳あり(メーカー過剰在庫)] ヘルシア緑茶 うまみ贅沢仕立て 500ml×24本',
                'amount' => '3338',
            ],
            [
                'name' => 'ドトールコーヒー ドリップパック 香り楽しむバラエティアソート 40P',
                'amount' => '1145',
            ],
            [
                'name' => 'ミツカン ビネグイットまろやかりんご酢ドリンク(6倍濃縮タイプ) 1000ml',
                'amount' => '649',
            ],
            [
                'name' => '神戸茶房緑茶ペット 500ml×24本',
                'amount' => '1366',
            ],
            [
                'name' => 'AGF マキシム ブラックインボックス アソート 50本 【インスタントコーヒー】 【個包装スティックタイプ】',
                'amount' => '1149',
            ],
            [
                'name' => 'ヒルス コーヒー 豆(粉) リッチブレンド AP 750g',
                'amount' => '990',
            ],
            [
                'name' => 'アサヒ飲料 ウィルキンソン ジンジャエール 強炭酸 500ml×24本',
                'amount' => '2236',
            ],
            [
                'name' => '有機コーディアル エルダーフラワー 500ml',
                'amount' => '1481',
            ],
            [
                'name' => '[トクホ] コカ・コーラ からだすこやか茶W お茶 ペットボトル 350ml×24本',
                'amount' => '3227',
            ],
            [
                'name' => 'ネスレ スターバックス ハウスブレンド ネスカフェ ドルチェ グスト専用カプセル 12杯分',
                'amount' => '980',
            ],
            [
                'name' => 'キリン 午後の紅茶 おいしい無糖 2L PET×9本',
                'amount' => '1400',
            ],
            [
                'name' => '大塚食品 クリスタルガイザー 700ml×24本 [正規輸入品]',
                'amount' => '1878',
            ],
            [
                'name' => 'AGF ブレンディ スティック 100本 【インスタントコーヒー】 【個包装 スティックタイプ】 【大容量】',
                'amount' => '1282',
            ],
            [
                'name' => '伊藤園 理想のトマト (紙パック)200ml×24本',
                'amount' => '1878',
            ],
            [
                'name' => 'ネスカフェ ゴールドブレンド コク深め エコ&システムパック 105g',
                'amount' => '771',
            ],
            [
                'name' => 'AGF ブレンディ レギュラーコーヒー ドリップパック スペシャルブレンド 100袋 【大容量】',
                'amount' => '2081',
            ],
            [
                'name' => 'アサヒ ウィルキンソン タンサン マルチパック(500ml×4本) 2000ml',
                'amount' => '318',
            ],
            [
                'name' => 'キリン ヨサソーダ 無糖・炭酸水 缶 (190ml×20本)',
                'amount' => '1049',
            ],
            [
                'name' => 'アサヒ飲料 モンスター パイプラインパンチ 355ml×24本',
                'amount' => '4129',
            ],
            [
                'name' => '伊藤園 evian(エビアン) ミネラルウォーター 500ml×24本 [正規輸入品]',
                'amount' => '2172',
            ],
        ];
        foreach ($item_seeds as $item) {
            DB::table('items')->insert($item);
        }
    }
}
