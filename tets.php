
// $graphql___tags_getAll = [
//     "query" => 'mutation {
//         productCreate(
//             input: {
//                 title: "Vanilla PHP & GraphQL"
//                 descriptionHtml: "<p>I am created using GraphQL!</p>"
//             }
//         ) {
//             product {
//                 id
//                 title
//             }
//         }
//     }'
// ];

$queryUsingVariables = <<<QUERY
    mutation addTags(\$id: ID!, \$tags: [String!]!) {
        tagsAdd(id: \$id, tags: \$tags) {
            node {
                id
            }
            userErrors {
                message
            }
        }
    }
QUERY;


$variables = [
    "id" => "gid://shopify/Product/7325887004864",
    "tags" => "one, two, three"
];
