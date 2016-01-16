"""
Demo driver for the interactive browser test module.

test_target: The URL that will be queried. The response will then be given
to the interactive browser to proceed.

"""
import urllib2
from testharness_mod_interactivebrowser.module import TestAction, AutoCloseUrls

target_path =  "http://www.warwaris.at/brtest/"

if __name__ == "__main__":

	test_target = target_path + "brtest.php"

	response = urllib2.urlopen(test_target)

	autocloseurls = AutoCloseUrls()

	autocloseurls.add(target_path + 'ack', 200, True)

	test = TestAction(autocloseurls)
	result = test.run(response,test_target)


	if result:
		print "Test: OK"
	else:
		print "Test: Failed"