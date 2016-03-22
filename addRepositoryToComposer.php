<?php
function createKeyFromUrl($url)
{
    return preg_replace('%[^a-zA-Z0-9]%', '_', $url);
}

function createRepositoryObjectFromInformation($type, $url)
{
    $object         = new stdClass;
    $object->type   = $type;
    $object->url    = $url;
    return $object;
}

function main($argv)
{
    //     "repositories": {
    //         "astorm/pestle": {
    //             "type": "git",
    //             "url": "git@github.com:astorm/pestle.git"
    //         }
    //     }, 
    $script          = array_shift($argv);
    $file            = array_shift($argv);
    $repository_type = 'git';
    $repository_url  = 'git@github.com:astorm/pestle.git';    
    $repository_key  = createKeyFromUrl($repository_url);

    $repository = createRepositoryObjectFromInformation(
        $repository_type, $repository_url);
    
    $json = json_decode(file_get_contents($file));
    if(!isset($json->repositories))
    {
        $json->repositories = new stdClass;
    }
    
    $json->repositories->{$repository_key} = $repository;

    echo json_encode($json),"\n";
}
main($argv);