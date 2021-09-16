<?php

/**
 * Build urls
 * @param string $paramKey
 * @param string $value
 * @param string|null $customParams
 * @return string
 */
function buildUrl(string $paramKey, string $value, ?string $customParams = null): string
{
    $urlParams = $customParams ?? $_SERVER['QUERY_STRING'];
    $fullParameter = $paramKey . '=' . $value;

    if (empty($urlParams)) {
        return "/?$fullParameter";
    }

    preg_match("/$paramKey=(.*?)(&|$)/", $urlParams, $matches, PREG_OFFSET_CAPTURE);
    if (count($matches) > 0) {
        if ($matches[count($matches)-1][1] < strlen($urlParams)) {
            $fullParameter .= '&';
        }
        $urlParams = preg_replace("/$paramKey=(.*?)(&|$)/", $fullParameter, $urlParams);
    } else {
        $urlParams .= "&$fullParameter";
    }
    $urlParams = resetPageFilter($paramKey, $urlParams);

    return '/?' . trim($urlParams, '&');
}

/**
 * Reset page parameter
 * @param string $paramKey
 * @param string $urlParams
 * @return string
 */
function resetPageFilter(string $paramKey, string $urlParams): string
{
    if (($paramKey === 'filter_by_state' || $paramKey === 'filter_by_first_letter') && isset($_GET['page'])) {
        return preg_replace('/(&|^)page=\d+/', '', $urlParams);
    }

    return $urlParams;
}

/**
 * @param int $itemsCount
 * @param int $itemsPerPage
 * @return int
 */
function countPage(int $itemsCount, int $itemsPerPage): int
{
    return ceil($itemsCount / $itemsPerPage);
}

/**
 * @param int $page
 * @param int $itemsPerPage
 * @return int
 */
function getOffsetCount(int $page, int $itemsPerPage): int
{
    return $page > 1 ? $itemsPerPage * ($page - 1) : 0;
}
