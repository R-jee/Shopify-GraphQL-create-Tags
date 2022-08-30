
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

function createTags__withGraphQL( $access_token , $host_shop , $gid , $tags_array ){
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
        "id" => $gid,
        "tags" => $tags_array
    ];
    return shopify_graphQL_call($access_token , $host_shop , "2022-04", ['query' => $queryUsingVariables, 'variables' => $variables] );
}
        
        
function removeTags__withGraphQL( $access_token , $host_shop , $gid , $tags_array ){
    $queryUsingVariables = <<<QUERY
    mutation tagsRemove(\$id: , \$tags: ) {
        tagsRemove(id: \$id, tags: \$tags) {
            node {
                id
            }
            userErrors {
                field
                message
            }
        }
    }
    QUERY;
    $variables = [
        "id" => $gid,
        "tags" => $tags_array
    ];
    return shopify_graphQL_call($access_token , $host_shop , "2022-04", ['query' => $queryUsingVariables, 'variables' => $variables] );
}
