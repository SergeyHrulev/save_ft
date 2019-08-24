<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
        }
        .wraper {
            display: grid;
            grid-template-columns: 400px 1fr 2fr 400px;
        }
        @media (min-width: 920px) {
            .wraper {
                grid-template-columns: 50px 1fr 2fr 50px;
            }
        }
        @media (min-width: 1200px) {
            .wraper {
                grid-template-columns: 100px 1fr 2fr 100px;
            }

        }
        @media (min-width: 1400px) {
            .wraper {
                grid-template-columns: 150px 1fr 2fr 150px;
            }

        }
        @media (min-width: 1600px) {
            .wraper {
                grid-template-columns: 200px 1fr 2fr 200px;
            }

        }
        @media (min-width: 442px) {
            .wraper {
                grid-template-columns: 50px 1fr 2fr 50px;
            }

        }
        @media (max-width: 442px) {
            .wraper {
                grid-template-columns: 20px 1fr 20px;
            }

        }
        .first {
            grid-column: 2/3;
            background-color: aqua;
        }
        .second {
            grid-column: 3/4;
            background-color: #9561e2;
        }
    </style>
</head>
<body>
    <div class="wraper">
        <div class="first">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, fuga, nostrum. Id molestias nostrum praesentium quae tempora! Commodi dolores doloribus explicabo itaque mollitia nobis qui quisquam tempore ullam, vero! A animi at consequuntur, corporis delectus dicta dolor dolores doloribus eligendi et eum exercitationem fugiat id ipsum laboriosam modi nobis odio, odit, quae quos repellendus reprehenderit rerum similique tenetur totam voluptates voluptatibus? Accusantium, aut beatae cum deserunt dignissimos doloribus eaque eligendi eos esse et nihil quae quod quos saepe voluptatem! At dolore enim excepturi facilis fuga fugit iste minima praesentium rerum voluptate. Ab debitis deleniti eius est ex fugit, illum nemo officia praesentium soluta. Accusamus adipisci distinctio enim neque omnis placeat quaerat tenetur. Ad aliquam aliquid asperiores delectus dignissimos distinctio eligendi, esse eveniet ex harum illum inventore iure quisquam repellendus ullam. Fugiat, ipsum, quisquam. Adipisci architecto asperiores aspernatur culpa cumque cupiditate dignissimos dolor earum error est fugiat harum in incidunt laborum libero magni minus mollitia necessitatibus nulla numquam officia optio perferendis placeat porro quas quasi qui quia quis quo repellendus saepe sapiente sunt tempora, tempore vel vitae voluptas. Excepturi illo quae sint. Amet aut debitis exercitationem minus mollitia nesciunt pariatur recusandae unde voluptate. Aspernatur aut dicta et eveniet mollitia placeat quasi repudiandae tempora? Adipisci animi assumenda corporis dolorum fuga laboriosam laborum numquam omnis, porro repudiandae tempore ullam. Ab adipisci consequuntur eius esse excepturi, expedita facere fugiat harum illo incidunt modi molestiae, necessitatibus officia provident reprehenderit rerum similique tempore unde velit vero! Blanditiis dicta dolorem harum officia quisquam rem tenetur, vel voluptas.
        </div>
        <div class="second">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aspernatur autem deserunt esse fuga harum incidunt ipsam laborum natus nemo placeat provident, quas quidem, rerum similique tempore, temporibus! A alias, architecto cumque fugiat illo ipsum laboriosam molestias nostrum optio placeat quaerat tempore unde vel veniam voluptatum. Adipisci dolor ex facilis labore porro sint. Cupiditate eum fugiat fugit hic itaque laudantium minus natus odio officia, voluptates? Aut consequuntur corporis culpa cumque eligendi esse est expedita facere ipsa iusto laborum magni maiores maxime nam necessitatibus, non perspiciatis praesentium, quaerat quo recusandae repudiandae rerum temporibus veniam. Corporis facilis harum laudantium pariatur repudiandae totam ullam voluptates? Aliquam atque deleniti dolore dolorem, doloremque laboriosam necessitatibus numquam praesentium similique voluptas. Ad aut delectus deleniti doloremque eveniet exercitationem facere, ipsa numquam reiciendis voluptas! Ab architecto atque et fuga modi, molestiae nesciunt odit officia officiis, recusandae repellendus saepe soluta vel. A accusamus accusantium aliquid amet corporis cum cumque distinctio doloremque ex excepturi explicabo hic ipsum laboriosam laborum laudantium libero maiores maxime nesciunt possimus rem repellendus reprehenderit saepe similique, soluta, ut vel veniam. A consequatur deleniti doloribus ea enim eveniet libero maiores odit quaerat quas saepe vel voluptate, voluptatem? Adipisci alias amet beatae delectus dolor eos illo illum, labore, laboriosam magni molestias numquam pariatur praesentium quos repellat? Dolorum hic impedit ipsa laboriosam mollitia nisi repellat! Accusantium alias blanditiis consequatur cum cumque debitis doloribus, ea est, expedita hic illum ipsam ipsum minima nam nihil, non nostrum obcaecati optio praesentium quam similique suscipit tempore ut voluptatem voluptates. Excepturi modi nisi sequi tempore? Aliquid delectus, doloribus ea enim impedit molestias officiis perspiciatis quam temporibus vel! Blanditiis ea molestiae nihil odio, optio sit sunt temporibus tenetur. Alias est fugit illo illum iusto molestiae natus pariatur perspiciatis, similique voluptatum? Commodi consectetur culpa in incidunt nemo, optio quaerat quis rerum similique totam vel voluptas voluptatum?
        </div>
    </div>
</body>
</html>
