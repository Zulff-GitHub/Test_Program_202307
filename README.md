# Test_Program_202307
Test program which includes 2 tests (Programming Test &amp; SQL Improvement Logic Test)

## Test 1

## Test 2
SQL Improvement Logic Test

### Steps:
1. Created a new database in local environment
2. Created 14 new tables according to test question.
3. Created a simple PHP program to insert random data into tables.
4. Execute query given in the test and observe the time taken to produce result.
5. Execute an improved query and observe the time taken to produce result.

### Sample Data
List of tables and total row

![image](https://github.com/Zulff-GitHub/Test_Program_202307/assets/8422283/62a7d9c8-9846-40f9-9381-c71e039fcc41)
### Result:
<table>
  <tr>
    <td>Original Query</td>
    <td>9.047 seconds</td>
    <td><img src="https://github.com/Zulff-GitHub/Test_Program_202307/assets/8422283/e1f6041c-e1d5-4518-9279-c53c63fe507f"  alt="1" ></td>
  </tr>
  <tr>
    <td>Improved Query</td>
    <td>2.531 seconds</td>
    <td><img src="https://github.com/Zulff-GitHub/Test_Program_202307/assets/8422283/1ebcb9ba-d5ba-40db-ad14-6709394b507e"  alt="1" ></td>
  </tr>
</table>

### Query
<details><summary>Original Query</summary>

```
SELECT Jobs.id AS `Jobs__id`,
jobs.name AS `Jobs__name`,
 Jobs.media_id AS `Jobs__media_id`,
 Jobs.job_category_id AS `Jobs__job_category_id`,
 Jobs.job_type_id AS `Jobs__job_type_id`,
 Jobs.description AS `Jobs__description`,
 Jobs.detail AS `Jobs__detail`,
 Jobs.business_skill AS `Jobs__business_skill`,
 Jobs.knowledge AS `Jobs__knowledge`,
 Jobs.location AS `Jobs__location`,
 Jobs.activity AS `Jobs__activity`,
 Jobs.academic_degree_doctor AS `Jobs__academic_degree_doctor`,
 Jobs.academic_degree_master AS `Jobs__academic_degree_master`,
 Jobs.academic_degree_professional AS `Jobs__academic_degree_professional`,
 Jobs.academic_degree_bachelor AS `Jobs__academic_degree_bachelor`,
 Jobs.salary_statistic_group AS `Jobs__salary_statistic_group`,
 Jobs.salary_range_first_year AS `Jobs__salary_range_first_year`,
 Jobs.salary_range_average AS `Jobs__salary_range_average`,
 Jobs.salary_range_remarks AS `Jobs__salary_range_remarks`,
 Jobs.restriction AS `Jobs__restriction`,
 Jobs.estimated_total_workers AS `Jobs__estimated_total_workers`,
 Jobs.remarks AS `Jobs__remarks`,
 Jobs.url AS `Jobs__url`,
 Jobs.seo_description AS `Jobs__seo_description`,
 Jobs.seo_keywords AS `Jobs__seo_keywords`,
 Jobs.sort_order AS `Jobs__sort_order`,
 Jobs.publish_status AS `Jobs__publish_status`,
 Jobs.version AS `Jobs__version`,
 Jobs.created_by AS `Jobs__created_by`,
 Jobs.created AS `Jobs__created`,
 Jobs.modified AS `Jobs__modified`,
 Jobs.deleted AS `Jobs__deleted`,
 JobCategories.id AS `JobCategories__id`,
 JobCategories.name AS `JobCategories__name`,
 JobCategories.sort_order AS `JobCategories__sort_order`,
 JobCategories.created_by AS `JobCategories__created_by`,
 JobCategories.created AS `JobCategories__created`,
 JobCategories.modified AS `JobCategories__modified`,
 JobCategories.deleted AS `JobCategories__deleted`,
 JobTypes.id AS `JobTypes__id`,
 JobTypes.name AS `JobTypes__name`,
 JobTypes.job_category_id AS `JobTypes__job_category_id`,
 JobTypes.sort_order AS `JobTypes__sort_order`,
 JobTypes.created_by AS `JobTypes__created_by`,
 JobTypes.created AS `JobTypes__created`,
 JobTypes.modified AS `JobTypes__modified`,
 JobTypes.deleted AS `JobTypes__deleted`
  FROM jobs Jobs LEFT JOIN jobs_personalities JobsPersonalities ON Jobs.id = (JobsPersonalities.job_id) LEFT JOIN personalities Personalities     ON (Personalities.id = (JobsPersonalities.personality_id)
AND (Personalities.deleted) IS NULL) LEFT JOIN jobs_practical_skills JobsPracticalSkills     ON Jobs.id = (JobsPracticalSkills.job_id) LEFT JOIN practical_skills PracticalSkills     ON (PracticalSkills.id = (JobsPracticalSkills.practical_skill_id)
AND (PracticalSkills.deleted) IS NULL) LEFT JOIN jobs_basic_abilities JobsBasicAbilities     ON Jobs.id = (JobsBasicAbilities.job_id) LEFT JOIN basic_abilities BasicAbilities     ON (BasicAbilities.id = (JobsBasicAbilities.basic_ability_id)
AND (BasicAbilities.deleted) IS NULL) LEFT JOIN jobs_tools JobsTools     ON Jobs.id = (JobsTools.job_id) LEFT JOIN affiliates Tools     ON (Tools.type = 1
AND Tools.id = (JobsTools.affiliate_id)
AND (Tools.deleted) IS NULL) LEFT JOIN jobs_career_paths JobsCareerPaths 
ON Jobs.id = (JobsCareerPaths.job_id) LEFT JOIN affiliates CareerPaths     ON (CareerPaths.type = 3
AND CareerPaths.id = (JobsCareerPaths.affiliate_id)
AND (CareerPaths.deleted) IS NULL) LEFT JOIN jobs_rec_qualifications JobsRecQualifications     ON Jobs.id = (JobsRecQualifications.job_id) LEFT JOIN affiliates RecQualifications     ON (RecQualifications.type = 2
AND RecQualifications.id = (JobsRecQualifications.affiliate_id)
AND (RecQualifications.deleted) IS NULL) LEFT JOIN jobs_req_qualifications JobsReqQualifications     ON Jobs.id = (JobsReqQualifications.job_id) LEFT JOIN affiliates ReqQualifications     ON (ReqQualifications.type = 2
AND ReqQualifications.id = (JobsReqQualifications.affiliate_id)
AND (ReqQualifications.deleted) IS NULL) INNER JOIN job_categories JobCategories     ON (JobCategories.id = (Jobs.job_category_id)
AND (JobCategories.deleted) IS NULL) INNER JOIN job_types JobTypes ON (JobTypes.id = (Jobs.job_type_id) AND (JobTypes.deleted) IS NULL) 
WHERE ((JobCategories.name LIKE '%キャビンアテンダント%'
OR JobTypes.name LIKE '%キャビンアテンダント%'
OR Jobs.name LIKE '%キャビンアテンダント%'
OR Jobs.description LIKE '%キャビンアテンダント%'
OR Jobs.detail LIKE '%キャビンアテンダント%'
OR Jobs.business_skill LIKE '%キャビンアテンダント%'
OR Jobs.knowledge LIKE '%キャビンアテンダント%'
OR Jobs.location LIKE '%キャビンアテンダント%'
OR Jobs.activity LIKE '%キャビンアテンダント%'
OR Jobs.salary_statistic_group LIKE '%キャビンアテンダント%'
OR Jobs.salary_range_remarks LIKE '%キャビンアテンダント%'
OR Jobs.restriction LIKE '%キャビンアテンダント%'
OR Jobs.remarks LIKE '%キャビンアテンダント%'
OR Personalities.name LIKE '%キャビンアテンダント%'
OR PracticalSkills.name LIKE '%キャビンアテンダント%'
OR BasicAbilities.name LIKE '%キャビンアテンダント%'
OR Tools.name LIKE '%キャビンアテンダント%'
OR CareerPaths.name LIKE '%キャビンアテンダント%'
OR RecQualifications.name LIKE '%キャビンアテンダント%'
OR ReqQualifications.name LIKE '%キャビンアテンダント%')
AND publish_status = 1
AND (Jobs.deleted) IS NULL) GROUP BY  Jobs.id 
ORDER BY  Jobs.sort_order desc,
Jobs.id DESC LIMIT 50 OFFSET 0
```
</details>
<details><summary>Improved Query</summary>

```
SELECT Jobs.id AS `Jobs__id`,
 Jobs.name AS `Jobs__name`,
 Jobs.media_id AS `Jobs__media_id`,
 Jobs.job_category_id AS `Jobs__job_category_id`,
 Jobs.job_type_id AS `Jobs__job_type_id`,
 Jobs.description AS `Jobs__description`,
 Jobs.detail AS `Jobs__detail`,
 Jobs.business_skill AS `Jobs__business_skill`,
 Jobs.knowledge AS `Jobs__knowledge`,
 Jobs.location AS `Jobs__location`,
 Jobs.activity AS `Jobs__activity`,
 Jobs.academic_degree_doctor AS `Jobs__academic_degree_doctor`,
 Jobs.academic_degree_master AS `Jobs__academic_degree_master`,
 Jobs.academic_degree_professional AS `Jobs__academic_degree_professional`,
 Jobs.academic_degree_bachelor AS `Jobs__academic_degree_bachelor`,
 Jobs.salary_statistic_group AS `Jobs__salary_statistic_group`,
 Jobs.salary_range_first_year AS `Jobs__salary_range_first_year`,
 Jobs.salary_range_average AS `Jobs__salary_range_average`,
 Jobs.salary_range_remarks AS `Jobs__salary_range_remarks`,
 Jobs.restriction AS `Jobs__restriction`,
 Jobs.estimated_total_workers AS `Jobs__estimated_total_workers`,
 Jobs.remarks AS `Jobs__remarks`,
 Jobs.url AS `Jobs__url`,
 Jobs.seo_description AS `Jobs__seo_description`,
 Jobs.seo_keywords AS `Jobs__seo_keywords`,
 Jobs.sort_order AS `Jobs__sort_order`,
 Jobs.publish_status AS `Jobs__publish_status`,
 Jobs.version AS `Jobs__version`,
 Jobs.created_by AS `Jobs__created_by`,
 Jobs.created AS `Jobs__created`,
 Jobs.modified AS `Jobs__modified`,
 Jobs.deleted AS `Jobs__deleted`,
 JobCategories.id AS `JobCategories__id`,
 JobCategories.name AS `JobCategories__name`,
 JobCategories.sort_order AS `JobCategories__sort_order`,
 JobCategories.created_by AS `JobCategories__created_by`,
 JobCategories.created AS `JobCategories__created`,
 JobCategories.modified AS `JobCategories__modified`,
 JobCategories.deleted AS `JobCategories__deleted`,
 JobTypes.id AS `JobTypes__id`,
 JobTypes.name AS `JobTypes__name`,
 JobTypes.job_category_id AS `JobTypes__job_category_id`,
 JobTypes.sort_order AS `JobTypes__sort_order`,
 JobTypes.created_by AS `JobTypes__created_by`,
 JobTypes.created AS `JobTypes__created`,
 JobTypes.modified AS `JobTypes__modified`,
 JobTypes.deleted AS `JobTypes__deleted`
FROM jobs Jobs
INNER JOIN job_categories JobCategories ON (JobCategories.id = (Jobs.job_category_id) AND (JobCategories.deleted) IS NULL)
INNER JOIN job_types JobTypes ON (JobTypes.id = (Jobs.job_type_id) AND (JobTypes.deleted) IS NULL)
WHERE Jobs.id IN (
SELECT id FROM jobs Jobs2 WHERE jobs2.name LIKE '%キャビンアテンダント%'OR Jobs2.description LIKE '%キャビンアテンダント%'OR Jobs2.detail LIKE '%キャビンアテンダント%'OR Jobs2.business_skill LIKE '%キャビンアテンダント%'OR Jobs2.knowledge LIKE '%キャビンアテンダント%'OR Jobs2.location LIKE '%キャビンアテンダント%'OR Jobs2.activity LIKE '%キャビンアテンダント%'OR Jobs2.salary_statistic_group LIKE '%キャビンアテンダント%'OR Jobs2.salary_range_remarks LIKE '%キャビンアテンダント%'OR Jobs2.restriction LIKE '%キャビンアテンダント%'OR Jobs2.remarks LIKE '%キャビンアテンダント%'
UNION
SELECT job_id FROM jobs_personalities JobsPersonalities INNER JOIN personalities Personalities ON (Personalities.id = (JobsPersonalities.personality_id) AND (Personalities.deleted) IS NULL) WHERE Personalities.name LIKE '%キャビンアテンダント%'
UNION
SELECT job_id FROM jobs_practical_skills JobsPracticalSkills INNER JOIN practical_skills PracticalSkills ON (PracticalSkills.id = (JobsPracticalSkills.practical_skill_id) AND (PracticalSkills.deleted) IS NULL) WHERE PracticalSkills.name LIKE '%キャビンアテンダント%'
UNION
SELECT job_id FROM jobs_basic_abilities JobsBasicAbilities INNER JOIN basic_abilities BasicAbilities ON (BasicAbilities.id = (JobsBasicAbilities.basic_ability_id) AND (BasicAbilities.deleted) IS NULL) WHERE BasicAbilities.name LIKE '%キャビンアテンダント%'
UNION 
SELECT job_id FROM jobs_tools JobsTools INNER JOIN affiliates Tools ON (Tools.type = 1 AND Tools.id = (JobsTools.affiliate_id) AND (Tools.deleted) IS NULL) WHERE Tools.name LIKE '%キャビンアテンダント%'
UNION
SELECT job_id FROM jobs_career_paths JobsCareerPaths INNER JOIN affiliates CareerPaths ON (CareerPaths.type = 3 AND CareerPaths.id = (JobsCareerPaths.affiliate_id) AND (CareerPaths.deleted) IS NULL) WHERE CareerPaths.name LIKE '%キャビンアテンダント%'
UNION
SELECT job_id FROM jobs_rec_qualifications JobsRecQualifications INNER JOIN affiliates RecQualifications ON (RecQualifications.type = 2 AND RecQualifications.id = (JobsRecQualifications.affiliate_id) AND (RecQualifications.deleted) IS NULL) WHERE RecQualifications.name LIKE '%キャビンアテンダント%'
UNION
select job_id from jobs_req_qualifications JobsReqQualifications INNER JOIN affiliates ReqQualifications ON (ReqQualifications.type = 2 AND ReqQualifications.id = (JobsReqQualifications.affiliate_id) AND (ReqQualifications.deleted) IS NULL) WHERE ReqQualifications.name LIKE '%キャビンアテンダント%'
) AND publish_status = 1
AND (Jobs.deleted) IS NULL
ORDER BY  Jobs.sort_order desc,
Jobs.id DESC LIMIT 50 OFFSET 0
```
</details>
