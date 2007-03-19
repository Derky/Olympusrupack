<?php
/** 
*
* acp_users [Russian]
*
* @package language
* @version $Id: users.php,v 1.22 2007/01/24 11:29:56 acydburn Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ADMIN_SIG_PREVIEW'		=> '�������� �������',
	'AT_LEAST_ONE_FOUNDER'	=> '�� �� ������ �������� ������ ����� ���������� �� �������� ������������. �� ����������� ������ ���� �� ������� ���� ���� ����������. ���� �� ������ �������� ������ ���������� ��� ����� ������������, ������� �������� ����������� ������� ������������.',

	'BAN_SUCCESSFUL'		=> '������ ������� ����������.',

	'CANNOT_BAN_FOUNDER'			=> '�� �� ������ ��������� ������� ������ �����������.',
	'CANNOT_BAN_YOURSELF'			=> '�� �� ������ ��������� ������ ����.',
	'CANNOT_DEACTIVATE_BOT'			=> '�� �� ������ �������������� ������� ������ �����. ����������, ������������� ����.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> '�� �� ������ �������������� ������� ������ �����������.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> '�� �� ������ �������������� ����������� ������� ������.',
	'CANNOT_FORCE_REACT_BOT'		=> '�� �� ������ ������������� �������������� ������� ������ �����. ����������, ������������� ����.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> '�� �� ������ ������������� �������������� ������� ������ �����������.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> '�� �� ������ ������������� �������������� ����������� ������� ������.',
	'CANNOT_REMOVE_ANONYMOUS'		=> '�� �� ������ ������� ������� ������ �����.',
	'CANNOT_REMOVE_YOURSELF'		=> '�� �� ������ ������� ����������� ������� ������.',
	'CANNOT_SET_FOUNDER_BOT'		=> '�� �� ������ ������� ������������ ������������� ������������.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> '�� ������ ������������ �������������, ����� ������� �� ������������. ������ �������������� ������������� ����� �������� ������.',
	'CONFIRM_EMAIL_EXPLAIN'			=> '�� ������ ��������� ��� ���� ������ ��� ��������� email-������� �������������.',

	'DELETE_POSTS'			=> '������� ���������',
	'DELETE_USER'			=> '������� ������������',
	'DELETE_USER_EXPLAIN'	=> '����������, ������, ��� �������� ������������ ������������, �� �� ����� ���� ������������',

	'FORCE_REACTIVATION_SUCCESS'	=> '����������� ������� �����������.',
	'FOUNDER'						=> '����������',
	'FOUNDER_EXPLAIN'				=> '���������� ����� ��� ����� �������������� � �� ����� ���� ��������� (��������), ������� ��� �������� � �������',

	'GROUP_APPROVE'					=> '�������� ������������',
	'GROUP_DEFAULT'					=> '������ ������ �� ��������� ��� ������������',
	'GROUP_DELETE'					=> '������� ������������ �� ������',
	'GROUP_DEMOTE'					=> '����� ������ ������',
	'GROUP_PROMOTE'					=> '��������� ������� ������',

	'IP_WHOIS_FOR'			=> 'IP whois ��� %s',

	'LAST_ACTIVE'			=> '��������� ���������',

	'MOVE_POSTS_EXPLAIN'	=> '����������, �������� �����, � ������� �� ������ ����������� ��� ��������� ������������.',

	'NO_SPECIAL_RANK'		=> '�� ��������� ������������ ������',
	'NOT_MANAGE_FOUNDER'	=> '�� �������� ��������� ������� ������� ������������ �� �������� ����������. ������ ���������� ����� ��������� �������� �������� ������ �����������.',

	'QUICK_TOOLS'			=> '������� ���������',

	'REGISTERED'			=> '���������������',
	'REGISTERED_IP'			=> '��������������� � IP-������',
	'RETAIN_POSTS'			=> '����������� ���������',

	'SELECT_FORM'			=> '������� �����',
	'SELECT_USER'			=> '������� ������������',

	'USER_ADMIN'					=> '���������� ��������������',
	'USER_ADMIN_ACTIVATE'			=> '������������ ������� ������',
	'USER_ADMIN_ACTIVATED'			=> '������������ ������� �����������.',
	'USER_ADMIN_AVATAR_REMOVED'		=> '������� ������������ ������� �������.',
	'USER_ADMIN_BAN_EMAIL'			=> '��������� email-�����',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Email-������, ����������� ����� ���������� ��������������',
	'USER_ADMIN_BAN_IP'				=> '��������� IP-�����',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP-������, ����������� ����� ���������� ��������������',
	'USER_ADMIN_BAN_NAME_REASON'	=> '�����, ����������� ����� ���������� ��������������',
	'USER_ADMIN_BAN_USER'			=> '��������� ��� ������������',
	'USER_ADMIN_DEACTIVATE'			=> '�������������� ������� ������',
	'USER_ADMIN_DEACTIVED'			=> '������������ ������� �������������.',
	'USER_ADMIN_DEL_ATTACH'			=> '������� ��� ��������',
	'USER_ADMIN_DEL_AVATAR'			=> '������� �������',
	'USER_ADMIN_DEL_POSTS'			=> '������� ��� ���������',
	'USER_ADMIN_DEL_SIG'			=> '������� �������',
	'USER_ADMIN_EXPLAIN'			=> '����� �� ������ �������� ���������� � ������������� � ��������� ����������� ���������. ��� ��������� ���� ������� ������������� ����������� ������� ���������� ���� ������� ��� ������������� � �����.',
	'USER_ADMIN_FORCE'				=> '�������������� �����������',
	'USER_ADMIN_MOVE_POSTS'			=> '����������� ��� ���������',
	'USER_ADMIN_SIG_REMOVED'		=> '������� ������������ ������� �������.',
	'USER_ATTACHMENTS_REMOVED'		=> '�������� ������������ ������� �������.',
	'USER_AVATAR_UPDATED'			=> '���������� �� ������� ������������ ������� ���������.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> '�������������� ���� �������',
	'USER_DELETED'					=> '������������ ������� �����.',
	'USER_GROUP_ADD'				=> '�������� ������������ � ������',
	'USER_GROUP_NORMAL'				=> '������� ������, � ������� ������ ������������',
	'USER_GROUP_PENDING'			=> '������, � ������� ������������ �������� ����������',
	'USER_GROUP_SPECIAL'			=> '����������� ������, � ������� ������ ������������',
	'USER_OVERVIEW_UPDATED'			=> '���������� � ������������ ���������.',
	'USER_POSTS_DELETED'			=> '��������� ������������ ������� �������.',
	'USER_POSTS_MOVED'				=> '��������� ������������ ������� ���������� � ��������� �����.',
	'USER_PREFS_UPDATED'			=> '��������� ������������ ���������.',
	'USER_PROFILE'					=> '������� ������������',
	'USER_PROFILE_UPDATED'			=> '������� ������������ �������.',
	'USER_RANK'						=> '������ ������������',
	'USER_RANK_UPDATED'				=> '������ ������������ ���������.',
	'USER_SIG_UPDATED'				=> '������� ������������ ������� ���������.',
	'USER_TOOLS'					=> '�������� ���������',
));

?>