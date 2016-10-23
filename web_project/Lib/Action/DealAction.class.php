<?php
	
class DealAction extends Action
{
	public function userRegist()
	{
		if(!IS_AJAX)
            halt('页面不存在');
        else
        {
        	$data['username'] = I('username');
        	$data['mail'] = I('mail');
        	$data['password'] = I('password','','md5');
        	$data['time'] = date("Y-m-d H:i:s",mktime());

            // $this->ajaxReturn($data,'json');
            // dump($data);
            // die;

            $condition['username'] = $data['username'];
            $condition['mail'] = $data['mail'];
            $condition['_logic'] = 'OR';

        	$blacklist = M('blacklist')->where($condition)->find();
            if(!$blacklist)
            {
                $user =  M('user')->where($condition)->find();
                if(!$user)
                {
                    $unread = M('unreadmessage')->where($condition)->find();
                    if(!$unread)
                    {
                        M('unreadmessage')->data($data)->add();
                        $this->ajaxReturn(array('status'=>0),'json');
                    }
                    else 
                    {
                        $this->ajaxReturn(array('status'=>2),'json');
                    }
                }
                else
                {
                    $this->ajaxReturn(array('status'=>1),'json');
                }
            }
            else
            {
                $this->ajaxReturn(array('status'=>1),'json');
            }
        	
        }
            
    }


    public function userLogin()
    {
        if(!IS_AJAX)
            halt('页面不存在');
        else
        {
            if(session('verify') != I('code','','md5'))
            {
                $this->ajaxReturn(array('status'=>2),'json');
            }
            else
            {
                $data['username'] = I('username');
                $data['password'] = I('password');

                $condition['username'] = $data['username'];
                $condition['password'] = $data['password'];
                $condition['_logic'] = 'AND';

                $manager = M('manager')->where($condition)->find();
                if(!$manager)
                {
                    $data['password'] = I('password','','md5');
                    $condition['password'] = $data['password'];

                    $user = M('user')->where($condition)->find();
                    $blacklist = M('blacklist')->where($condition)->find();

                    if(!$user && !$blacklist)
                    {
                        $this->ajaxReturn(array('status'=>0),'json');
                    }
                    else if($user && !$blacklist)
                    {
                        cookie('username',$data['username']);
                       $this->ajaxReturn(array('status'=>4),'json');
                    }
                    else if($blacklist)
                    {
                        $this->ajaxReturn(array('status'=>3),'json');
                    }
                }
                else
                {
                    cookie('username',$data['username']);
                    
                    $this->ajaxReturn(array('status'=>1),'json');
                }
            }
        }
    }

// 用户
   
    public function manageUserToBlack()
    {
        if(!IS_AJAX)
            halt('页面不存在');
        else
        {
            $condition['mail'] = I('mail');
            $condition['username'] = I('username');
            $condition['_logic'] = 'AND';

            $userResult = M('user')->where($condition)->select();
            M('blacklist')->data($userResult[0])->add();
            M('user')->where($condition)->delete();
            $this->ajaxReturn(array('status'=>1),'json');

        }
    }

    public function manageUserDelete()
    {
        if(!IS_AJAX)
            halt('页面不存在');
        else
        {
            $condition['mail'] = I('mail');
            $condition['username'] = I('username');
            $condition['_logic'] = 'AND';
            M('user')->where($condition)->delete();
            M('readmessage')->where($condition)->delete();
            $this->ajaxReturn(array('status'=>1),'json');
        }
    }

    public function manageUserBianJi()
    {
        if(!IS_AJAX)
            halt('页面不存在');
        else
        {

        }
    }



    //未读消息 
    public function manageAgreeRegist()
    {
        if(!IS_AJAX)
            halt('页面不存在');
        else
        {
            $unread = M('unreadmessage');
            $user = M('user');
            $read = M('readmessage');

            $condition['mail'] = I('mail');
            $condition['username'] = I('username');
            $condition['_logic'] = 'AND';
        
            // $dataUnRegist['headPic'] = '';
            // $dataUnRegist['signature'] = '';



            $dataUnRegist = $unread->where($condition)->select();
            $user->data($dataUnRegist[0])->add();
            $read->data($dataUnRegist[0])->add();
            $unread->where($condition)->delete();
            $this->ajaxReturn(array('status'=>1),'json');
        }
        
    }
    public function manageYiRuBlack()
    {
        if(!IS_AJAX)
            halt('页面不存在');
        else
        {
            $unread = M('unreadmessage');
            $blacklist = M('blacklist');

            $condition['mail'] = I('mail');
            $condition['username'] = I('username');
            $condition['_logic'] = 'AND';

            $dataYiRublack1 = $unread->where($condition)->select();
            $blacklist->data($dataYiRublack1[0])->add();
            $unread->where($condition)->delete();

            $this->ajaxReturn(array('status'=>1),'json');
        }
    }
    public function manageDeleteUnRead()
    {
        if(!IS_AJAX)
            halt('页面不存在');
        else
        {
            $unread = M('unreadmessage');

            $condition['mail'] = I('mail');
            $condition['username'] = I('username');
            $condition['_logic'] = 'AND';

            $unread->where($condition)->delete();
            $this->ajaxReturn(array('status'=>1),'json');
        }
    }





// 已读消息


public function manageDeleteRead()
{
    if(!IS_AJAX)
            halt('页面不存在');
    else
    {
        $condition['mail'] = I('mail');
        $condition['username'] = I('username');
        $condition['_logic'] = 'AND';
        M('readmessage')->where($condition)->delete();
        $this->ajaxReturn(array('status'=>1),'json');
    }
}



// 黑名单
public function manageYiChuBlack()
{
    if(!IS_AJAX)
        halt('页面不存在');
    else
    {

        $condition['mail'] = I('mail');
        $condition['username'] = I('username');
        $condition['_logic'] = 'AND';

        $blackOut = M('blacklist')->where($condition)->select();
        M('user')->data($blackOut[0])->add();
        M('blacklist')->where($condition)->delete();
        $this->ajaxReturn(array('status'=>1),'json');
    }
}
public function manageDeleteChuBlack()
{
    if(!IS_AJAX)
        halt('页面不存在');
    else
    {
        $condition['mail'] = I('mail');
        $condition['username'] = I('username');
        $condition['_logic'] = 'AND';
        M('blacklist')->where($condition)->delete();
        $this->ajaxReturn(array('status'=>1),'json');
    }

}


    // 找回密码
    public function findPwd()
    {
        if(!IS_AJAX)
            halt('页面不存在');
        else
        {

            $mail = stripslashes(trim(I('mail')));
            $mail = injectChk($mail);
            
            $condition['mail'] = $mail;
           
            $user = M('user')->where($condition)->find();
            $manager = M('manager')->where($condition)->find();
            if((!$user) && (!$manager))
            {
                $this->ajaxReturn(array('status'=>1),'json');
            }
            else
            {
                $mail = I('mail');
               
                
                $row = M('user')->where($condition)->select();
                //$row = $data[0];

                
                $token = md5($row['username'].$row['password'].$row['mail']);  //组合验证码

                $url = "http://119.29.200.124/index.php/Index/resetPwd?mail=".$mail."&token=".$token; //构造URL
                $time = date('Y-m-d H:i');
                $emailbody = "亲爱的".$email."：<br/>您在".$time."提交了找回密码请求。请点击下面的链接重置密码，以便可以再次登陆青协会员（按钮24小时内有效）。<br/><a href='".$url."' target='_blank'>".$url."</a><br/>如果以上链接无法点击，请将它复制到你的浏览器地址栏中进入访问。<br/>如果您没有提交找回密码请求，请忽略此邮件。";
                    send_mail($mail,'你好，计科青协找回密码',$emailbody);

                $this->ajaxReturn(array('status'=>'系统已向您的邮箱发送了一封邮件<br/>请登录到您的邮箱及时重置您的密码！'),'json');
            }

        }
    }


    public function userChangePwd()
    {
        if(!IS_AJAX)
            halt('页面不存在');
        else
        {
            $data['password'] = I('password','','md5');
            $condition['username'] = $_COOKIE['username'];
            M('user')->where($condition)->setField($data);
            $this->ajaxReturn(array('status'=>1),'json');
        }
    }

    public function managerChangePwd()
    {
        if(!IS_AJAX)
            halt('页面不存在');
        else
        {
            $data['password'] = I('password');
            $condition['username'] = $_COOKIE['username'];
            M('manager')->where($condition)->setField($data);
            $this->ajaxReturn(array('status'=>1),'json');
        }
    }

    public function pwdReset()
    {
        if(!IS_AJAX)
            halt('页面不存在');
        else
        {
            $data['password'] = I('password');
            $condition['mail'] = $_COOKIE['mail'];

            $managerFind = M('manager')->where($condition)->find();
            $userFind = M('user')->where($condition)->find();
            if($managerFind)
            {
                M('manager')->where($condition)->setField($data);
                $this->ajaxReturn(array('status'=>1),'json');
                die;
            }
            else if($userFind)
            {
                $row['password'] = I('password','','md5');
                M('user')->where($condition)->setField($row);
                $this->ajaxReturn(array('status'=>1),'json');
                die;
            }
            else
                $this->ajaxReturn(array('status'=>2),'json');
        }
    }
    public function addActivity()
    {
        if(!IS_AJAX)
            halt('页面不存在');
        else
        {
            $data['aname'] = I('activityName');
            $data['astime'] = I('startData');
            $data['aendtime'] = I('endData');
            $data['aplace'] = I('activityPlace');
            $data['ades'] = I('activityDes');
            $data['abei'] = I('activityBei');

            $condition['aname'] = $data['aname'];
            $activityFind = M('activity')->where($condition)->find();
            if(!$activityFind)
            {
                M('activity')->data($data)->add();
                $this->ajaxReturn(array('status'=>1),'json');
                die;
            }
            else
            {
                 $this->ajaxReturn(array('status'=>2),'json');
            }

        }
    }

    public function manageActivityDelete()
    {
        if(!IS_AJAX)
            halt('页面不存在');
        else
        {
            $condition['aname'] = I('activityname');
            M('activity')->where($condition)->delete();
            $this->ajaxReturn(array('status'=>1),'json');
        }
    }

    public function manageActivityEdit()
    {
        if(!IS_AJAX)
            halt('页面不存在');
        $condition['aname'] = I('activityname');
        $data['astime'] = I('sTimeEdit');
        $data['aendtime'] = I('eTimeEdit');
        $data['aplace'] = I('aPlaceEdit'); 

        M('activity')->where($condition)->setField($data);
        $this->ajaxReturn(array('status'=>1),'json');
        
    }

    public function userJoinActivity()
    {
        if(!IS_AJAX)
            halt('页面不存在');
        else
        {
            $data['username'] = $_COOKIE['username'];
            $data['aname'] = I('aname');
            M('useractivity')->data($data)->add();
            $this->ajaxReturn(array('status'=>1),'json');
        }
    }

    public function userDeleteJoinActivity()
    {
        if(!IS_AJAX)
            halt('页面不存在');
        else
        {
            $condition['username'] = $_COOKIE['username'];
            $condition['aname'] = I('aname');
            $condition['_logic'] = 'AND';
            M('useractivity')->where($condition)->delete();
            $this->ajaxReturn(array('status'=>1),'json');

        }
    }
    public function manageDeleteUserActivity()
    {
        if(!IS_AJAX)
            halt('页面不存在');
        else
        {
            $condition['username'] = I('username');
            $condition['aname'] = I('aname');
            $condition['_logic'] = 'AND';
            M('useractivity')->where($condition)->delete();
            $this->ajaxReturn(array('status'=>1),'json');
        }
    }
}


