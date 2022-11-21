<?php
session_start();

require_once('../Classes/Session.php');
require_once('../Classes/CSRFToken.php');
require_once('../Classes/Request.php');

class OrderFacade
{
    static function save()
    {
        if (Request::has("post")) {
            $request = Request::get("post");
            if (CSRFToken::verifyCSRFToken($request->token, false)) {
                if (!$request->order_id) {
                    throw new \Exception("Malicious Activity");
                }

                // Saving logic...

                echo json_encode(["success" => "Order saved"]);
                exit;
            } else {
                echo json_encode(["error" => "Wrong token"]);
                exit;
            }
        } else {
            echo json_encode(["error" => "Get request. Post needed."]);
            exit;
        }
    }
}
